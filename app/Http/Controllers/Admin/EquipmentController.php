<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Equipment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class EquipmentController extends Controller
{
    public function index()
    {
        $equipment = Equipment::orderBy('sort_order')->orderBy('name')->get();

        return view('admin.equipment.index', compact('equipment'));
    }

    public function create()
    {
        return view('admin.equipment.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name'       => 'required|string|max:255',
            'category'   => 'required|in:washers,dryers,barrier-washers,ironers',
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
            'category'   => 'required|in:washers,dryers,barrier-washers,ironers',
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
