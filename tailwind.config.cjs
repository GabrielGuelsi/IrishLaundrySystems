// Tailwind v3.4.17 build for the public site (replaces the Play CDN).
// Rebuild after changing classes in any Blade view:  npm run build:css
// Theme mirrors the old inline `tailwind.config` from layouts/app.blade.php.
module.exports = {
    content: ['./resources/views/**/*.blade.php'],
    theme: {
        extend: {
            colors: {
                navy: {
                    DEFAULT: '#011E41',
                    light:   '#0d3568',
                    dark:    '#010f2a',
                },
                steel: {
                    DEFAULT: '#148af4',
                    light:   '#5babf7',
                    dark:    '#0f70cc',
                },
                orange: {
                    DEFAULT: '#148af4',
                    light:   '#5babf7',
                    dark:    '#0f70cc',
                },
                emerald: {
                    DEFAULT: '#16A34A',
                    light:   '#22C55E',
                    dark:    '#15803D',
                },
                muted:  '#b2b2b2',
                border: '#b2b2b2',
                bg:     '#eaeff5',
                card:   '#FFFFFF',
            },
            fontFamily: {
                heading: ['Inter', 'system-ui', 'sans-serif'],
                body:    ['Inter', 'system-ui', 'sans-serif'],
            },
            boxShadow: {
                card: '0 1px 3px 0 rgba(0,0,0,0.08), 0 1px 2px -1px rgba(0,0,0,0.05)',
                'card-hover': '0 4px 16px 0 rgba(0,0,0,0.10)',
            },
        },
    },
};
