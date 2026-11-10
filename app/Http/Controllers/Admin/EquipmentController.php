<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Equipment;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class EquipmentController extends Controller
{
    public function index()
    {
        $equipment = Equipment::orderBy('sort_order')->orderBy('name')->get();

        // Same structure as the public category pages: one group per category, one row per
        // card, the sizes listed inside that card under it, then products with no card.
        $groups = [];
        $categories = Equipment::CATEGORIES + $equipment->pluck('category', 'category')->all();

        foreach ($categories as $category => $label) {
            $families = [];
            $noCard = [];

            foreach ($equipment->where('category', $category) as $item) {
                $card = $item->site_card;
                if (! $card) {
                    $noCard[] = $item;
                    continue;
                }
                $families[$card['slug']] ??= ['card' => $card, 'main' => null, 'sizes' => []];
                if ($card['own'] && ! $families[$card['slug']]['main']) {
                    $families[$card['slug']]['main'] = $item;
                } else {
                    $families[$card['slug']]['sizes'][] = $item;
                }
            }

            if (! $families && ! $noCard) {
                continue;
            }

            uasort($families, fn ($a, $b) => $a['card']['order'] <=> $b['card']['order']);
            foreach ($families as &$family) {
                usort($family['sizes'], fn ($a, $b) => strnatcmp($a->slug, $b->slug));
            }
            unset($family);
            usort($noCard, fn ($a, $b) => strnatcmp($a->slug, $b->slug));

            $groups[] = ['label' => $label, 'families' => $families, 'noCard' => $noCard];
        }

        return view('admin.equipment.index', compact('equipment', 'groups'));
    }

    public function create()
    {
        return view('admin.equipment.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name'       => 'required|string|max:255',
            'category'   => ['required', Rule::in(array_keys(Equipment::CATEGORIES))],
            'capacity'   => 'nullable|string|max:100',
            'summary'    => 'nullable|string',
            'sectors'    => 'nullable|array',
            'sectors.*'  => 'string',
            'specs'      => 'nullable|string', // JSON string from JS
            'image'      => 'nullable|image|max:2048|mimes:jpg,jpeg,png,webp',
            'is_active'  => 'nullable|boolean',
            'sort_order' => 'nullable|integer',
        ]);

        $data = [
            'name'       => $validated['name'],
            'slug'       => Str::slug($validated['name']),
            'category'   => $validated['category'],
            'capacity'   => $validated['capacity'] ?? null,
            'summary'    => $validated['summary'] ?? null,
            'sectors'    => $validated['sectors'] ?? [],
            'specs'      => $validated['specs'] ? json_decode($validated['specs'], true) : [],
            'is_active'  => $request->boolean('is_active', true),
            'sort_order' => $validated['sort_order'] ?? 0,
        ];

        if ($request->hasFile('image')) {
            $data['image_path'] = $request->file('image')->store('equipment', 'public');
        }

        Equipment::create($data);

        return redirect()->route('admin.equipment.index')
            ->with('success', 'Equipment item created successfully.');
    }

    public function edit(Equipment $equipment)
    {
        return view('admin.equipment.edit', compact('equipment'));
    }

    public function update(Request $request, Equipment $equipment)
    {
        $validated = $request->validate([
            'name'       => 'required|string|max:255',
            'category'   => ['required', Rule::in(array_keys(Equipment::CATEGORIES))],
            'capacity'   => 'nullable|string|max:100',
            'summary'    => 'nullable|string',
            'sectors'    => 'nullable|array',
            'sectors.*'  => 'string',
            'specs'      => 'nullable|string',
            'image'      => 'nullable|image|max:2048|mimes:jpg,jpeg,png,webp',
            'is_active'  => 'nullable|boolean',
            'sort_order' => 'nullable|integer',
        ]);

        $data = [
            'name'       => $validated['name'],
            'category'   => $validated['category'],
            'capacity'   => $validated['capacity'] ?? null,
            'summary'    => $validated['summary'] ?? null,
            'sectors'    => $validated['sectors'] ?? [],
            'specs'      => $validated['specs'] ? json_decode($validated['specs'], true) : [],
            'is_active'  => $request->boolean('is_active', false),
            'sort_order' => $validated['sort_order'] ?? 0,
        ];

        if ($request->hasFile('image')) {
            // Delete old image if exists
            if ($equipment->image_path) {
                Storage::disk('public')->delete($equipment->image_path);
            }
            $data['image_path'] = $request->file('image')->store('equipment', 'public');
        }

        $equipment->update($data);

        return redirect()->route('admin.equipment.index')
            ->with('success', 'Equipment item updated successfully.');
    }

    public function destroy(Equipment $equipment)
    {
        if ($equipment->image_path) {
            Storage::disk('public')->delete($equipment->image_path);
        }

        $equipment->delete();

        return redirect()->route('admin.equipment.index')
            ->with('success', 'Equipment item deleted.');
    }

    public function toggleActive(Equipment $equipment)
    {
        $equipment->update(['is_active' => ! $equipment->is_active]);

        return redirect()->route('admin.equipment.index')
            ->with('success', 'Status updated.');
    }
}
