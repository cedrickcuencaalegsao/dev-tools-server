<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ToolsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tools')->insert([
            [
                'name' => 'React',
                'category' => json_encode(['Web Development']),
                'language' => 'JavaScript/TypeScript',
                'description' => 'A JavaScript library for building user interfaces.',
                'documentation_url' => 'https://reactjs.org/docs/getting-started.html',
                'clickCount' => 0,
                'created_at' => now(),
                'updated_at' => now(),
                'image' => 'default.jpg',
            ],
            [
                'name' => 'Vue.js',
                'category' => json_encode(['Web Development']),
                'language' => 'JavaScript/TypeScript',
                'description' => 'A progressive framework for building user interfaces.',
                'documentation_url' => 'https://vuejs.org/v2/guide/',
                'clickCount' => 0,
                'created_at' => now(),
                'updated_at' => now(),
                'image' => 'default.jpg',
            ],

            [
                'name' => 'Eva Design System',
                'category' => json_encode(['color palette']),
                'language' => 'N/A',
                'documentation_url' => 'https://colors.eva.design/',
                'description' => 'A design system that provides a consistent interface for applications.',
                'clickCount' => 0,
                'created_at' => now(),
                'updated_at' => now(),
                'image' => 'default.jpg',
            ],
            [
                'name' => 'Feather Icons',
                'category' => json_encode(['icons']),
                'language' => 'N/A',
                'documentation_url' => 'https://feathericons.com/',
                'description' => 'A collection of beautiful open-source icons.',
                'clickCount' => 0,
                'created_at' => now(),
                'updated_at' => now(),
                'image' => 'default.jpg',
            ],
            [
                'name' => 'Boxicons',
                'category' => json_encode(['icons']),
                'language' => 'N/A',
                'documentation_url' => 'https://boxicons.com/',
                'description' => 'A free collection of carefully crafted icons.',
                'clickCount' => 0,
                'created_at' => now(),
                'updated_at' => now(),
                'image' => 'default.jpg',
            ],
            [
                'name' => 'Polaris Icons',
                'category' => json_encode(['icons', 'components', 'layouts']),
                'language' => 'N/A',
                'documentation_url' => 'https://polaris.shopify.com/icons',
                'description' => 'A set of icons designed for Shopify applications.',
                'clickCount' => 0,
                'created_at' => now(),
                'updated_at' => now(),
                'image' => 'default.jpg',
            ],
            [
                'name' => 'Pigment',
                'category' => json_encode(['color palette']),
                'language' => 'N/A',
                'documentation_url' => 'https://pigment.shapefactory.co/',
                'description' => 'A tool for generating color palettes.',
                'clickCount' => 0,
                'created_at' => now(),
                'updated_at' => now(),
                'image' => 'default.jpg',
            ],
            [
                'name' => 'LOL Colors',
                'category' => json_encode(['color palette']),
                'language' => 'N/A',
                'documentation_url' => 'https://www.webdesignrankings.com/resources/lolcolors/',
                'description' => 'A resource for color palettes inspired by the game League of Legends.',
                'clickCount' => 0,
                'created_at' => now(),
                'updated_at' => now(),
                'image' => 'default.jpg',
            ],
            [
                'name' => 'Daisy UI',
                'category' => json_encode(['component', 'tailwind']),
                'language' => 'N/A',
                'documentation_url' => 'https://daisyui.com/docs/install/',
                'description' => 'A component library built on Tailwind CSS.',
                'clickCount' => 0,
                'created_at' => now(),
                'updated_at' => now(),
                'image' => 'default.jpg',
            ],
            [
                'name' => 'React Icons',
                'category' => json_encode(['icons', 'reactjs', 'nextjs']),
                'language' => 'N/A',
                'documentation_url' => 'https://react-icons.github.io/react-icons/',
                'description' => 'A library for including popular icons in React applications.',
                'clickCount' => 0,
                'created_at' => now(),
                'updated_at' => now(),
                'image' => 'default.jpg',
            ],
            [
                'name' => 'Color Safe',
                'category' => json_encode(['color palette', 'accessibility']),
                'language' => 'N/A',
                'documentation_url' => 'http://colorsafe.co/',
                'description' => 'A tool for creating color palettes that meet accessibility standards.',
                'clickCount' => 0,
                'created_at' => now(),
                'updated_at' => now(),
                'image' => 'default.jpg',
            ],
            [
                'name' => 'Who Can Use',
                'category' => json_encode(['color palette', 'accessibility']),
                'language' => 'N/A',
                'documentation_url' => 'https://www.whocanuse.com/',
                'description' => 'A tool that helps users check color contrast ratios.',
                'clickCount' => 0,
                'created_at' => now(),
                'updated_at' => now(),
                'image' => 'default.jpg',
            ],
            [
                'name' => 'A11y Project',
                'category' => json_encode(['accessibility']),
                'language' => 'N/A',
                'documentation_url' => 'https://www.a11yproject.com/',
                'description' => 'A community-driven effort to improve web accessibility.',
                'created_at' => now(),
                'clickCount' => 0,
                'updated_at' => now(),
                'image' => 'default.jpg',
            ],
            [
                'name' => 'Accessible Brand Colors',
                'category' => json_encode(['accessibility']),
                'language' => 'N/A',
                'documentation_url' => 'https://abc.useallfive.com/',
                'description' => 'A resource for accessible color choices for branding.',
                'clickCount' => 0,
                'created_at' => now(),
                'updated_at' => now(),
                'image' => 'default.jpg',
            ],
            [
                'name' => 'Contrast Grid',
                'category' => json_encode(['accessibility']),
                'language' => 'N/A',
                'documentation_url' => 'https://contrast-grid.eightshapes.com/?version=1.1.0&background-colors=&foreground-colors=%23FFFFFF%2C%20White%0D%0A%23F2F2F2%0D%0A%23DDDDDD%0D%0A%23CCCCCC%0D%0A%23888888%0D%0A%23404040%2C%20Charcoal%0D%0A%23000000%2C%20Black%0D%0A%232F78C5%2C%20Effective%20on%20Extremes%0D%0A%230F60B6%2C%20Effective%20on%20Lights%0D%0A%23398EEA%2C%20Ineffective%0D%0A&es-color-form__tile-size=compact&es-color-form__show-contrast=aaa&es-color-form__show-contrast=aa&es-color-form__show-contrast=aa18&es-color-form__show-contrast=dnp',
                'description' => 'A tool for checking color contrast between elements.',
                'clickCount' => 0,
                'created_at' => now(),
                'updated_at' => now(),
                'image' => 'default.jpg',
            ],
            [
                'name' => 'Figma',
                'category' => json_encode(['design tools']),
                'language' => 'N/A',
                'documentation_url' => 'https://www.figma.com/',
                'description' => 'A web-based UI design tool for collaborative design.',
                'clickCount' => 0,
                'created_at' => now(),
                'updated_at' => now(),
                'image' => 'default.jpg',
            ],
            [
                'name' => 'Sketch',
                'category' => json_encode(['design tools']),
                'language' => 'N/A',
                'documentation_url' => 'https://www.sketch.com/',
                'description' => 'A vector graphics editor for macOS for designing interfaces.',
                'clickCount' => 0,
                'created_at' => now(),
                'updated_at' => now(),
                'image' => 'default.jpg',
            ],
            [
                'name' => 'Bootstrap',
                'category' => json_encode(['CSS Framework']),
                'language' => 'HTML, CSS, JavaScript',
                'documentation_url' => 'https://getbootstrap.com/',
                'description' => 'A popular HTML, CSS, and JS framework for developing responsive,
                mobile-first projects on the web.',
                'clickCount' => 0,
                'created_at' => now(),
                'updated_at' => now(),
                'image' => 'default.jpg',
            ],
            [
                'name' => 'Tailwind CSS',
                'category' => json_encode(['CSS Framework']),
                'language' => 'CSS',
                'documentation_url' => 'https://tailwindcss.com/',
                'description' => 'A utility-first CSS framework for creating custom designs without having to leave your HTML.',
                'clickCount' => 0,
                'created_at' => now(),
                'updated_at' => now(),
                'image' => 'default.jpg',
            ],
            [
                'name' => 'Django',
                'category' => json_encode(['Web Framework']),
                'language' => 'Python',
                'documentation_url' => 'https://www.djangoproject.com/',
                'description' => 'A high-level Python web framework that encourages rapid development and clean, pragmatic design.',
                'clickCount' => 0,
                'created_at' => now(),
                'updated_at' => now(),
                'image' => 'default.jpg',
            ],
            [
                'name' => 'Flask',
                'category' => json_encode(['Web Framework']),
                'language' => 'Python',
                'documentation_url' => 'https://flask.palletsprojects.com/',
                'description' => 'A lightweight WSGI web application framework in Python.',
                'clickCount' => 0,
                'created_at' => now(),
                'updated_at' => now(),
                'image' => 'default.jpg',
            ],
            [
                'name' => 'Angular',
                'category' => json_encode(['JavaScript Framework']),
                'language' => 'TypeScript',
                'documentation_url' => 'https://angular.io/',
                'description' => 'A platform for building mobile and desktop web applications.',
                'clickCount' => 0,
                'created_at' => now(),
                'updated_at' => now(),
                'image' => 'default.jpg',
            ],
            [
                'name' => 'Laravel',
                'category' => json_encode(['PHP Framework']),
                'language' => 'PHP',
                'documentation_url' => 'https://laravel.com/',
                'description' => 'A web application framework with expressive, elegant syntax.',
                'clickCount' => 0,
                'created_at' => now(),
                'updated_at' => now(),
                'image' => 'default.jpg',
            ],
            [
                'name' => 'Express.js',
                'category' => json_encode(['Web Framework']),
                'language' => 'JavaScript',
                'documentation_url' => 'https://expressjs.com/',
                'description' => 'A minimal and flexible Node.js web application framework that provides a robust set of features.',
                'clickCount' => 0,
                'created_at' => now(),
                'updated_at' => now(),
                'image' => 'default.jpg',
            ],
            [
                'name' => 'Ruby on Rails',
                'category' => json_encode(['Web Framework']),
                'language' => 'Ruby',
                'documentation_url' => 'https://rubyonrails.org/',
                'description' => 'A web-application framework that includes everything needed to create database-backed web applications.',
                'clickCount' => 0,
                'created_at' => now(),
                'updated_at' => now(),
                'image' => 'default.jpg',
            ],
            [
                'name' => 'Spring Boot',
                'category' => json_encode(['Java Framework']),
                'language' => 'Java',
                'documentation_url' => 'https://spring.io/projects/spring-boot',
                'description' => 'A framework that simplifies the setup of new Spring applications.',
                'clickCount' => 0,
                'created_at' => now(),
                'updated_at' => now(),
                'image' => 'default.jpg',
            ],
            [
                'name' => 'Gatsby',
                'category' => json_encode(['Static Site Generator']),
                'language' => 'JavaScript',
                'documentation_url' => 'https://www.gatsbyjs.com/',
                'description' => 'A free and open-source framework based on React that helps developers build fast websites.',
                'clickCount' => 0,
                'created_at' => now(),
                'updated_at' => now(),
                'image' => 'default.jpg',
            ],
            [
                'name' => 'Next.js',
                'category' => json_encode(['React Framework']),
                'language' => 'JavaScript',
                'documentation_url' => 'https://nextjs.org/',
                'description' => 'A React framework that enables server-side rendering and generating static websites.',
                'clickCount' => 0,
                'created_at' => now(),
                'updated_at' => now(),
                'image' => 'default.jpg',
            ],
            [
                'name' => 'Sass',
                'category' => json_encode(['CSS Preprocessor']),
                'language' => 'CSS',
                'documentation_url' => 'https://sass-lang.com/',
                'description' => 'A preprocessor scripting language that is interpreted or compiled into CSS.',
                'clickCount' => 0,
                'created_at' => now(),
                'updated_at' => now(),
                'image' => 'default.jpg',
            ],
            [
                'name' => 'Redux',
                'category' => json_encode(['State Management']),
                'language' => 'JavaScript',
                'documentation_url' => 'https://redux.js.org/',
                'description' => 'A predictable state container for JavaScript apps.',
                'clickCount' => 0,
                'created_at' => now(),
                'updated_at' => now(),
                'image' => 'default.jpg',
            ],
            [
                'name' => 'Webpack',
                'category' => json_encode(['Module Bundler']),
                'language' => 'JavaScript',
                'documentation_url' => 'https://webpack.js.org/',
                'description' => 'A static module bundler for modern JavaScript applications.',
                'clickCount' => 0,
                'created_at' => now(),
                'updated_at' => now(),
                'image' => 'default.jpg',
            ],
            [
                'name' => 'PostCSS',
                'category' => json_encode(['CSS Tool']),
                'language' => 'CSS',
                'documentation_url' => 'https://postcss.org/',
                'description' => 'A tool for transforming CSS with JavaScript plugins.',
                'clickCount' => 0,
                'created_at' => now(),
                'updated_at' => now(),
                'image' => 'default.jpg',
            ],
            [
                'name' => 'Cypress',
                'category' => json_encode(['Testing Framework']),
                'language' => 'JavaScript',
                'documentation_url' => 'https://www.cypress.io/',
                'description' => 'A next generation front end testing tool built for the modern web.',
                'clickCount' => 0,
                'created_at' => now(),
                'updated_at' => now(),
                'image' => 'default.jpg',
            ],
            [
                'name' => 'Jest',
                'category' => json_encode(['Testing Framework']),
                'language' => 'JavaScript',
                'documentation_url' => 'https://jestjs.io/',
                'description' => 'A delightful JavaScript testing framework with a focus on simplicity.',
                'clickCount' => 0,
                'created_at' => now(),
                'updated_at' => now(),
                'image' => 'default.jpg',
            ],
            [
                'name' => 'Figma',
                'category' => json_encode(['Design Tool']),
                'language' => 'N/A',
                'documentation_url' => 'https://www.figma.com/',
                'description' => 'A collaborative interface design tool.',
                'clickCount' => 0,
                'created_at' => now(),
                'updated_at' => now(),
                'image' => 'default.jpg',
            ],
            [
                'name' => 'Product Hunt',
                'category' => json_encode(['Design News']),
                'language' => null,
                'documentation_url' => 'https://www.producthunt.com/',
                'description' => 'A platform to discover and share new products.',
                'clickCount' => 0,
                'created_at' => now(),
                'updated_at' => now(),
                'image' => 'default.jpg',
            ],
            [
                'name' => 'Medium',
                'category' => json_encode(['Design News']),
                'language' => null,
                'documentation_url' => 'https://medium.com/tag/design',
                'description' => 'A platform where people share ideas and stories related to design.',
                'clickCount' => 0,
                'created_at' => now(),
                'updated_at' => now(),
                'image' => 'default.jpg',
            ],
            [
                'name' => 'Prototypr.io',
                'category' => json_encode(['Design News']),
                'language' => null,
                'documentation_url' => 'https://prototypr.io/',
                'description' => 'A hub for design, UX, and development inspiration.',
                'clickCount' => 0,
                'created_at' => now(),
                'updated_at' => now(),
                'image' => 'default.jpg',
            ],
            [
                'name' => 'Logo Maker',
                'category' => json_encode(['Inspiration']),
                'language' => null,
                'documentation_url' => 'https://www.namecheap.com/logo-maker/',
                'description' => 'A free online logo maker tool.',
                'clickCount' => 0,
                'created_at' => now(),
                'updated_at' => now(),
                'image' => 'default.jpg',
            ],
            [
                'name' => 'Dark Mode Design',
                'category' => json_encode(['Inspiration']),
                'language' => null,
                'documentation_url' => 'https://www.darkmodedesign.com/',
                'description' => 'A curated collection of dark mode design inspiration.',
                'clickCount' => 0,
                'created_at' => now(),
                'updated_at' => now(),
                'image' => 'default.jpg',
            ],
            [
                'name' => 'BestFolios',
                'category' => json_encode(['Inspiration']),
                'language' => null,
                'documentation_url' => 'https://www.bestfolios.com/home',
                'description' => 'A showcase of best portfolios for inspiration.',
                'clickCount' => 0,
                'created_at' => now(),
                'updated_at' => now(),
                'image' => 'default.jpg',
            ],
            [
                'name' => 'One Page Love',
                'category' => json_encode(['Inspiration']),
                'language' => null,
                'documentation_url' => 'https://onepagelove.com/',
                'description' => 'A collection of one-page website templates and inspiration.',
                'clickCount' => 0,
                'created_at' => now(),
                'updated_at' => now(),
                'image' => 'default.jpg',
            ],
            [
                'name' => 'ICONSVG',
                'category' => json_encode(['Icons']),
                'language' => null,
                'documentation_url' => 'https://iconsvg.xyz',
                'description' => 'A platform to create and customize SVG icons.',
                'clickCount' => 0,
                'created_at' => now(),
                'updated_at' => now(),
                'image' => 'default.jpg',
            ],
            [
                'name' => 'Hero Icons',
                'category' => json_encode(['Icons']),
                'language' => null,
                'documentation_url' => 'https://heroicons.dev/',
                'description' => 'A set of free, open-source icons.',
                'clickCount' => 0,
                'created_at' => now(),
                'updated_at' => now(),
                'image' => 'default.jpg',
            ],
            [
                'name' => 'Icons8',
                'category' => json_encode(['Icons']),
                'language' => null,
                'documentation_url' => 'https://icons8.com',
                'description' => 'An extensive collection of icons and illustrations.',
                'clickCount' => 0,
                'created_at' => now(),
                'updated_at' => now(),
                'image' => 'default.jpg',
            ],
            [
                'name' => 'ionicons',
                'category' => json_encode(['Icons']),
                'language' => null,
                'documentation_url' => 'https://ionic.io/ionicons/',
                'description' => 'A beautifully crafted set of open-source icons.',
                'clickCount' => 0,
                'created_at' => now(),
                'updated_at' => now(),
                'image' => 'default.jpg',
            ],
            [
                'name' => 'Icon Scout',
                'category' => json_encode(['Icons']),
                'language' => null,
                'documentation_url' => 'https://iconscout.com',
                'description' => 'A collection of high-quality icons, illustrations, and stock photos.',
                'clickCount' => 0,
                'created_at' => now(),
                'updated_at' => now(),
                'image' => 'default.jpg',
            ],
            [
                'name' => 'Line Icons',
                'category' => json_encode(['Icons']),
                'language' => null,
                'documentation_url' => 'https://lineicons.com/',
                'description' => 'A collection of modern, line-style icons.',
                'clickCount' => 0,
                'created_at' => now(),
                'updated_at' => now(),
                'image' => 'default.jpg',
            ],
            [
                'name' => 'Adobe Fonts',
                'category' => json_encode(['Typography']),
                'language' => null,
                'documentation_url' => 'https://fonts.adobe.com',
                'description' => 'A large collection of high-quality fonts from Adobe.',
                'clickCount' => 0,
                'created_at' => now(),
                'updated_at' => now(),
                'image' => 'default.jpg',
            ],
            [
                'name' => 'Fonts In Use',
                'category' => json_encode(['Typography']),
                'language' => null,
                'documentation_url' => 'https://fontsinuse.com/',
                'description' => 'A website for exploring typefaces in real-world projects.',
                'clickCount' => 0,
                'created_at' => now(),
                'updated_at' => now(),
                'image' => 'default.jpg',
            ],
            [
                'name' => 'Google Fonts',
                'category' => json_encode(['Typography']),
                'language' => null,
                'documentation_url' => 'https://fonts.google.com',
                'description' => 'A library of free web fonts provided by Google.',
                'clickCount' => 0,
                'created_at' => now(),
                'updated_at' => now(),
                'image' => 'default.jpg',
            ],
            [
                'name' => 'Font Fabric',
                'category' => json_encode(['Typography']),
                'language' => null,
                'documentation_url' => 'https://www.fontfabric.com/free-fonts/',
                'description' => 'A collection of high-quality, free-to-download fonts.',
                'clickCount' => 0,
                'created_at' => now(),
                'updated_at' => now(),
                'image' => 'default.jpg',
            ],
            [
                'name' => 'RightFont',
                'category' => json_encode(['Typography']),
                'language' => null,
                'documentation_url' => 'https://rightfontapp.com/',
                'description' => 'A professional font manager for Mac.',
                'clickCount' => 0,
                'created_at' => now(),
                'updated_at' => now(),
                'image' => 'default.jpg',
            ],
            [
                'name' => 'UX Myths',
                'category' => json_encode(['Learn Design']),
                'language' => null,
                'documentation_url' => 'https://uxmyths.com',
                'description' => 'A website that dispels common UX misconceptions.',
                'clickCount' => 0,
                'created_at' => now(),
                'updated_at' => now(),
                'image' => 'default.jpg',
            ],
            [
                'name' => 'Brief Box',
                'category' => json_encode(['Learn Design']),
                'language' => null,
                'documentation_url' => 'https://www.briefbox.me/',
                'description' => 'An online platform providing design challenges for learning.',
                'clickCount' => 0,
                'created_at' => now(),
                'updated_at' => now(),
                'image' => 'default.jpg',
            ],
            [
                'name' => 'WebFlow',
                'category' => json_encode(['Learn Design']),
                'language' => null,
                'documentation_url' => 'https://university.webflow.com/videos',
                'description' => 'A platform offering tutorials and resources for building websites with Webflow.',
                'clickCount' => 0,
                'created_at' => now(),
                'updated_at' => now(),
                'image' => 'default.jpg',
            ],
            [
                'name' => 'Laws of UX',
                'category' => json_encode(['Learn Design']),
                'language' => null,
                'documentation_url' => 'https://lawsofux.com',
                'description' => 'A website that teaches principles and laws of user experience design.',
                'clickCount' => 0,
                'created_at' => now(),
                'updated_at' => now(),
                'image' => 'default.jpg',
            ],
            [
                'name' => 'DesignUp',
                'category' => json_encode(['Learn Design']),
                'language' => null,
                'documentation_url' => 'https://designerup.co/',
                'description' => 'An online platform providing resources and courses on design.',
                'clickCount' => 0,
                'created_at' => now(),
                'updated_at' => now(),
                'image' => 'default.jpg',
            ]
        ]);
    }
}
