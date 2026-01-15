# Barebones WordPress + Tailwind Starter Theme

A minimal, modern WordPress starter theme with Tailwind CSS preconfigured.

Perfect for developers who want to skip the Tailwind setup and start coding immediately.

## Features

- Tailwind CSS configured
- Minimal, clean theme structure
- <title> tag handling
- HTML5 markup support
- Seperation of source (assets/) and output (dist/)

## Folder Structure
```
.
├── assets
│ └── css
│ └── main.css # Tailwind input file (@tailwind directives)
├── dist
│ └── main.css # Compiled Tailwind output (auto‑generated)
├── functions.php # Theme setup + asset enqueue
├── index.php # Basic template
├── package.json # Build scripts + dependencies
├── postcss.config.js # Tailwind + PostCSS pipeline
├── src # JS source (optional)
├── style.css # Theme header only
└── tailwind.config.js # Tailwind configuration
```
## Installation

1. Clone or download the theme into your Wordpress `wp-content/themes` directory
2. Install dependencies:

```bash
npm i
```

3. Start the development watcher:

```bash
 npm run tailwind:watch
```

4. Build for production:

```bash
npm run tailwind:build
```

5. Activate theme in the Wordpress admin panel

## How it works

### Input File

`assets/css/main.css`
This file contains tailwind directives, you may add your custom css here

```css
@tailwind base;
@tailwind components;
@tailwind utilities;
```

### Output File

`dist/main.css`  
This file is generated automatically by Tailwind/PostCSS and is the stylesheet that WordPress loads.

By default, this file is ignored because the theme assumes your deployment environment will run the build process. If your environment doesn’t support Node, you may want to commit `dist/main.css` so the theme works without a build step.

## Asset Enqueue

The compiled CSS is loaded automatically from `dist/main.css`

## License

MIT — free to use, modify, and build upon. See LICENSE file
