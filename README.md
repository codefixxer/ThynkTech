# ThynkTech – Premium Front-End UI (Landing + Inner Pages)

A modern, animation-rich, pixel-perfect front-end for a tech company to showcase ideas, success stories, services, portfolio, and contact details. Built with semantic **HTML5**, **Bootstrap 5**, **professional CSS**, and **vanilla ES6+ JavaScript**—no backend code required.

> **Highlights:** latest UI patterns, luxurious color palette, buttery-smooth micro-interactions, accessible keyboard navigation, and production-grade responsiveness across devices.

---

## Table of Contents

* [Overview](#overview)
* [Key Features](#key-features)
* [Pages](#pages)
* [Navigation & Menus](#navigation--menus)
* [Design System](#design-system)
* [Animations](#animations)
* [Accessibility (A11y)](#accessibility-a11y)
* [Performance](#performance)
* [Tech Stack](#tech-stack)
* [Project Structure](#project-structure)
* [Getting Started](#getting-started)
* [Customization](#customization)
* [SEO & Metadata](#seo--metadata)
* [Quality Targets](#quality-targets)
* [Browser Support](#browser-support)
* [Credits & License](#credits--license)

---

## Overview

**ThynkTech** is a front-end–only, marketing and content website for a technology brand. The goal is a **premium**, **trend-aware** experience with **elegant motion** and **sharp typography**, while remaining **maintainable** and **framework-agnostic**. Every screen is laid out to “tell the story” of the company: what they build, how they work, and why they are trusted.

This repository includes:

* A high-impact **Landing/Home** page.
* Complete **inner pages** for commerce, blog, company info, legal, FAQs, and more.
* A reusable **component library** (cards, badges, dropdowns, accordions, tabs, counters, testimonials, pricing, timelines).

---

## Key Features

* **Modern IA & layout:** grid-first, whitespace-aware sections with clear visual hierarchy.
* **Drop-shadowed glass surfaces** and **soft-rounded corners** for a contemporary, polished look.
* **Premium dropdown menus** with smooth open/close transitions and smart positioning.
* **Motion guidelines:** micro-interactions on hover/focus; section reveals on scroll.
* **Mobile-first responsiveness** (fluid typography, container queries where viable).
* **Keyboard-navigable header & menus**; visible focus rings and ARIA roles.
* **No dependencies on a backend**—works as a static site (Netlify, Vercel, GitHub Pages, S3, etc.).
* **Clean, documented CSS** with custom properties (CSS variables) for instant theming.

---

## Pages

The project ships with pixel-aligned templates for the following:

* **Landing / Home**
* **Pages (company):**

  * Pricing
  * About Us
  * App Integration
  * Integration Details
  * Privacy Policy
  * FAQ
  * Project Details
  * Service Details
* **Shop (optional storefront):**

  * Shop
  * Shop Details
  * Cart
  * Checkout
* **Blog:**

  * Blog
  * Blog Details
* **Contact** (CTA-driven with form and map block)

> The dropdown menus for **Pages**, **Shop**, and **Blog** match the screenshots and include refined spacing, large tap targets, and subtle elevation.

---

## Navigation & Menus

* **Top Nav:** white, slightly elevated bar with active state and subtle underline on hover.
* **Dropdowns:** animated with transform+opacity, spring-like easing, and shadow layers.

  * Opens on click/tap; supports keyboard (`Enter`, `Space`, `Esc`, arrow keys).
  * Closes on outside click and on `Esc`.
  * ARIA: `aria-expanded`, `aria-controls`, `role="menu"`, `role="menuitem"`.
* **Responsive behavior:** collapses into a menu button on small screens; dropdowns become accordions for better ergonomics.

---

## Design System

**Typography**

* Modern sans-serif pairing with strong headings and comfortable body text.
* Fluid type scale (`clamp()`) for legibility from mobile to 4K.

**Color Palette**

* **Primary:** deep indigo/navy for text and accents.
* **Secondary/Accent:** vibrant blue with subtle gradients.
* **Surface:** white/near-white cards with soft shadows.
* **Feedback:** green (success), amber (warning), red (danger), blue (info).

**Components**

* Hero, feature grid, KPI counters, testimonials, logo wall, pricing tables, FAQ accordion, timeline, stepper, CTA banners, cards (service/project/blog), and forms.

---

## Animations

* **Entrance animations** on scroll (fade+translate, scale pop-ins with damping).
* **Hover micro-interactions** for links, buttons, cards (elevation + slight lift).
* **Dropdown motion** tuned for **200–280ms** with cubic-bezier easing for a premium feel.
* **Reduced motion**: respects `prefers-reduced-motion` to disable non-essential effects.

---

## Accessibility (A11y)

* Semantic landmarks (`header`, `nav`, `main`, `section`, `footer`).
* Sufficient color contrast and focus outlines always visible.
* Keyboard-first nav including dropdown menus and form controls.
* ARIA attributes for menus, accordions, and interactive widgets.
* Labels, placeholders, and error hints for forms.

---

## Performance

* **CSS & JS split** by page where possible.
* Asset **minification** and **HTTP caching** (immutable hashed filenames).
* **Lazy-loading** for images; `loading="lazy"`, `decoding="async"`, and responsive `srcset`.
* SVG icons inlined for fewer requests; icon fonts avoided.
* Optional build via Vite for bundling & compression.

---

## Tech Stack

* **HTML5**, **CSS3 (custom properties, clamp, logical properties)**
* **Bootstrap 5** (grid, utilities, only required components)
* **Vanilla JavaScript (ES6+)** for menus, accordions, modals, and scroll/hover effects
* **SVG** for crisp, lightweight icons

*No jQuery, no heavy UI frameworks.*

---

## Project Structure

```
thynktech/
├─ assets/
│  ├─ css/
│  │  ├─ base.css          # resets, variables (colors, spacing, typography)
│  │  ├─ layout.css        # header, footer, grids
│  │  ├─ components.css    # cards, buttons, dropdowns, accordions, tabs, etc.
│  │  └─ pages/            # page-specific overrides
│  ├─ js/
│  │  ├─ core.js           # helpers (trapFocus, onEsc, outsideClick)
│  │  ├─ menu.js           # nav + dropdown logic (ARIA, keyboard)
│  │  ├─ ui.js             # scroll reveals, counters, carousels
│  │  └─ forms.js          # validation, toasts
│  ├─ img/                 # optimized images & SVGs
│  └─ fonts/
├─ pages/
│  ├─ index.html
│  ├─ about.html
│  ├─ pricing.html
│  ├─ app-integration.html
│  ├─ integration-details.html
│  ├─ privacy.html
│  ├─ faq.html
│  ├─ project-details.html
│  ├─ service-details.html
│  ├─ shop.html
│  ├─ shop-details.html
│  ├─ cart.html
│  ├─ checkout.html
│  ├─ blog.html
│  ├─ blog-details.html
│  └─ contact.html
└─ README.md
```

---

## Getting Started

### 1) Run locally (no build tools)

```bash
# clone
git clone <repo-url>
cd thynktech

# open any HTML file in your browser (Live Server recommended)
```

### 2) Optional: serve with Node + Vite

```bash
npm i
npm run dev     # starts a local server with auto-reload
npm run build   # outputs /dist with minified assets
```

---

## Customization

### Theme via CSS Variables (`assets/css/base.css`)

```css
:root{
  --color-bg: #ffffff;
  --color-text: #0b0c1a;         /* deep navy */
  --color-primary: #1b45ff;      /* luxury blue accent */
  --color-primary-600:#1233cc;
  --color-muted:#61677a;

  --radius-card: 1.25rem;
  --shadow-1: 0 4px 16px rgba(16,24,40,.06);
  --shadow-2: 0 12px 32px rgba(16,24,40,.10);

  --ease-spring: cubic-bezier(.2,.8,.2,1);
  --duration-quick: 200ms;
}
```

### Toggle Motion for Users Preferring Reduced Motion

```css
@media (prefers-reduced-motion: reduce){
  * { animation: none !important; transition: none !important; }
}
```

---

## SEO & Metadata

* Per-page `<title>` and `<meta name="description">`.
* Open Graph / Twitter Cards for rich sharing.
* Canonicals to prevent duplicate content.
* JSON-LD schema for Organization, Product, and Article (blog).

---

## Quality Targets

* **Lighthouse**: ≥95 Performance, ≥95 Accessibility, ≥95 Best Practices, ≥95 SEO on modern devices.
* **CLS < 0.1**, **LCP < 2.5s**, **TBT < 200ms** for key pages.
* **WCAG 2.1 AA** color contrast and keyboard operability.

---

## Browser Support

* Latest Chrome, Edge, Firefox, Safari.
* Graceful degradation for older browsers; progressive enhancement used where applicable.

---

## Screenshots

Place your screenshots in `assets/img/screenshots/` and reference them here, e.g.:

```
![Pages Dropdown](assets/img/screenshots/pages-dropdown.png)
![Shop Dropdown](assets/img/screenshots/shop-dropdown.png)
![Blog Dropdown](assets/img/screenshots/blog-dropdown.png)
```

---

## Credits & License

* Design & development: **ThynkTech Front-End by Hassam**
* Icons: SVG line icons (attribution as required).
* License: *Add your license here (MIT recommended for front-end templates).*

---

### Maintainer Notes

* Keep components atomic and documented.
* Prefer utility classes and small overrides over deep selector chains.
* Test keyboard navigation for every interactive element prior to release.

---

**ThynkTech** delivers a **latest-gen**, **visually rich**, and **highly usable** front-end ready for real-world deployment—no backend needed.
