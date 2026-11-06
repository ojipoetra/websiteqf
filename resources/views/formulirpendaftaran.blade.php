<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="web_standard" name="shell-type">
    <link
        href="https://fonts.googleapis.com/css2?family=Epilogue:wght@500;600;700&amp;family=Plus_Jakarta_Sans:wght@400;500;600;700&amp;display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet">
    <style>
        @layer base {

            html,
            body {
                margin: 0;
                padding: 0;
            }

            body {
                overscroll-behavior: none;
            }

            main>:first-child {
                margin-top: 0 !important;
            }

            main>:last-child {
                margin-bottom: 0 !important;
            }
        }

        ::-webkit-scrollbar {
            display: none;
        }
    </style>
    <script src="https://cdn.tailwindcss.com"></script>
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "on-background": "#131b2e",
                        "tertiary-container": "#9c6300",
                        "on-surface-variant": "#3f493f",
                        "on-secondary": "#ffffff",
                        "surface-bright": "#faf8ff",
                        "primary-fixed": "#95f8a7",
                        "on-primary-fixed-variant": "#005323",
                        "outline-variant": "#becabc",
                        "on-tertiary-fixed": "#2a1700",
                        "on-error-container": "#93000a",
                        "surface-variant": "#dae2fd",
                        "inverse-primary": "#79db8d",
                        "primary-fixed-dim": "#79db8d",
                        "on-error": "#ffffff",
                        "on-secondary-fixed-variant": "#00522d",
                        "error": "#ba1a1a",
                        "surface-container-low": "#f2f3ff",
                        "on-secondary-container": "#007241",
                        "on-tertiary-fixed-variant": "#653e00",
                        "inverse-on-surface": "#eef0ff",
                        "on-primary-fixed": "#00210a",
                        "tertiary-fixed": "#ffddb8",
                        "on-primary": "#ffffff",
                        "secondary-fixed-dim": "#73db9a",
                        "surface": "#faf8ff",
                        "background": "#faf8ff",
                        "surface-container-high": "#e2e7ff",
                        "inverse-surface": "#283044",
                        "secondary-container": "#8cf5b2",
                        "on-primary-container": "#d3ffd5",
                        "primary-container": "#15803d",
                        "primary": "#00652c",
                        "secondary": "#006d3e",
                        "surface-container-highest": "#dae2fd",
                        "on-secondary-fixed": "#00210f",
                        "error-container": "#ffdad6",
                        "outline": "#6f7a6e",
                        "tertiary-fixed-dim": "#ffb95f",
                        "surface-tint": "#006d30",
                        "tertiary": "#7b4d00",
                        "on-surface": "#131b2e",
                        "surface-container-lowest": "#ffffff",
                        "on-tertiary": "#ffffff",
                        "surface-dim": "#d2d9f4",
                        "surface-container": "#eaedff",
                        "on-tertiary-container": "#fff2e7",
                        "secondary-fixed": "#8ff8b4"
                    },
                    borderRadius: {
                        DEFAULT: "0.25rem",
                        lg: "0.5rem",
                        xl: "0.75rem",
                        full: "9999px"
                    },
                    spacing: {
                        "space-lg": "1.5rem",
                        "gutter-desktop": "2rem",
                        margin: "1.5rem",
                        gutter: "1.5rem",
                        "margin-desktop": "3rem",
                        "space-md": "1rem",
                        "space-xl": "2.5rem",
                        "space-xs": "0.25rem",
                        "space-sm": "0.5rem"
                    },
                    fontFamily: {
                        "body-sm": ["Plus Jakarta Sans"],
                        "headline-sm": ["Epilogue"],
                        "label-sm": ["Plus Jakarta Sans"],
                        "display-hero": ["Epilogue"],
                        "body-lg": ["Plus Jakarta Sans"],
                        "headline-lg": ["Epilogue"],
                        "headline-lg-mobile": ["Epilogue"],
                        "body-md": ["Plus Jakarta Sans"],
                        "label-md": ["Plus Jakarta Sans"],
                        "headline-md": ["Epilogue"],
                        "title-lg": ["Plus Jakarta Sans"],
                        "label-lg": ["Plus Jakarta Sans"],
                        "title-md": ["Plus Jakarta Sans"],
                        "display-hero-mobile": ["Epilogue"]
                    },
                    fontSize: {
                        "body-sm": ["13px", {
                            lineHeight: "20px",
                            letterSpacing: "0.005em",
                            fontWeight: "400"
                        }],
                        "headline-sm": ["20px", {
                            lineHeight: "28px",
                            letterSpacing: "-0.005em",
                            fontWeight: "600"
                        }],
                        "label-sm": ["10px", {
                            lineHeight: "14px",
                            letterSpacing: "0.04em",
                            fontWeight: "700"
                        }],
                        "display-hero": ["56px", {
                            lineHeight: "64px",
                            letterSpacing: "-0.02em",
                            fontWeight: "700"
                        }],
                        "body-lg": ["18px", {
                            lineHeight: "28px",
                            letterSpacing: "0em",
                            fontWeight: "400"
                        }],
                        "headline-lg": ["40px", {
                            lineHeight: "48px",
                            letterSpacing: "-0.015em",
                            fontWeight: "700"
                        }],
                        "headline-lg-mobile": ["28px", {
                            lineHeight: "36px",
                            letterSpacing: "-0.01em",
                            fontWeight: "700"
                        }],
                        "body-md": ["15px", {
                            lineHeight: "24px",
                            letterSpacing: "0em",
                            fontWeight: "400"
                        }],
                        "label-md": ["12px", {
                            lineHeight: "16px",
                            letterSpacing: "0.02em",
                            fontWeight: "600"
                        }],
                        "headline-md": ["28px", {
                            lineHeight: "36px",
                            letterSpacing: "-0.01em",
                            fontWeight: "600"
                        }],
                        "title-lg": ["18px", {
                            lineHeight: "26px",
                            letterSpacing: "-0.005em",
                            fontWeight: "600"
                        }],
                        "label-lg": ["14px", {
                            lineHeight: "20px",
                            letterSpacing: "0.01em",
                            fontWeight: "600"
                        }],
                        "title-md": ["16px", {
                            lineHeight: "24px",
                            letterSpacing: "0em",
                            fontWeight: "600"
                        }],
                        "display-hero-mobile": ["36px", {
                            lineHeight: "44px",
                            letterSpacing: "-0.015em",
                            fontWeight: "700"
                        }]
                    }
                }
            }
        };
    </script>
    <style>
        *,
        ::before,
        ::after {
            --tw-border-spacing-x: 0;
            --tw-border-spacing-y: 0;
            --tw-translate-x: 0;
            --tw-translate-y: 0;
            --tw-rotate: 0;
            --tw-skew-x: 0;
            --tw-skew-y: 0;
            --tw-scale-x: 1;
            --tw-scale-y: 1;
            --tw-pan-x: ;
            --tw-pan-y: ;
            --tw-pinch-zoom: ;
            --tw-scroll-snap-strictness: proximity;
            --tw-gradient-from-position: ;
            --tw-gradient-via-position: ;
            --tw-gradient-to-position: ;
            --tw-ordinal: ;
            --tw-slashed-zero: ;
            --tw-numeric-figure: ;
            --tw-numeric-spacing: ;
            --tw-numeric-fraction: ;
            --tw-ring-inset: ;
            --tw-ring-offset-width: 0px;
            --tw-ring-offset-color: #fff;
            --tw-ring-color: rgb(59 130 246 / 0.5);
            --tw-ring-offset-shadow: 0 0 #0000;
            --tw-ring-shadow: 0 0 #0000;
            --tw-shadow: 0 0 #0000;
            --tw-shadow-colored: 0 0 #0000;
            --tw-blur: ;
            --tw-brightness: ;
            --tw-contrast: ;
            --tw-grayscale: ;
            --tw-hue-rotate: ;
            --tw-invert: ;
            --tw-saturate: ;
            --tw-sepia: ;
            --tw-drop-shadow: ;
            --tw-backdrop-blur: ;
            --tw-backdrop-brightness: ;
            --tw-backdrop-contrast: ;
            --tw-backdrop-grayscale: ;
            --tw-backdrop-hue-rotate: ;
            --tw-backdrop-invert: ;
            --tw-backdrop-opacity: ;
            --tw-backdrop-saturate: ;
            --tw-backdrop-sepia: ;
            --tw-contain-size: ;
            --tw-contain-layout: ;
            --tw-contain-paint: ;
            --tw-contain-style:
        }

        ::backdrop {
            --tw-border-spacing-x: 0;
            --tw-border-spacing-y: 0;
            --tw-translate-x: 0;
            --tw-translate-y: 0;
            --tw-rotate: 0;
            --tw-skew-x: 0;
            --tw-skew-y: 0;
            --tw-scale-x: 1;
            --tw-scale-y: 1;
            --tw-pan-x: ;
            --tw-pan-y: ;
            --tw-pinch-zoom: ;
            --tw-scroll-snap-strictness: proximity;
            --tw-gradient-from-position: ;
            --tw-gradient-via-position: ;
            --tw-gradient-to-position: ;
            --tw-ordinal: ;
            --tw-slashed-zero: ;
            --tw-numeric-figure: ;
            --tw-numeric-spacing: ;
            --tw-numeric-fraction: ;
            --tw-ring-inset: ;
            --tw-ring-offset-width: 0px;
            --tw-ring-offset-color: #fff;
            --tw-ring-color: rgb(59 130 246 / 0.5);
            --tw-ring-offset-shadow: 0 0 #0000;
            --tw-ring-shadow: 0 0 #0000;
            --tw-shadow: 0 0 #0000;
            --tw-shadow-colored: 0 0 #0000;
            --tw-blur: ;
            --tw-brightness: ;
            --tw-contrast: ;
            --tw-grayscale: ;
            --tw-hue-rotate: ;
            --tw-invert: ;
            --tw-saturate: ;
            --tw-sepia: ;
            --tw-drop-shadow: ;
            --tw-backdrop-blur: ;
            --tw-backdrop-brightness: ;
            --tw-backdrop-contrast: ;
            --tw-backdrop-grayscale: ;
            --tw-backdrop-hue-rotate: ;
            --tw-backdrop-invert: ;
            --tw-backdrop-opacity: ;
            --tw-backdrop-saturate: ;
            --tw-backdrop-sepia: ;
            --tw-contain-size: ;
            --tw-contain-layout: ;
            --tw-contain-paint: ;
            --tw-contain-style:
        }

        /* ! tailwindcss v3.4.17 | MIT License | https://tailwindcss.com */
        *,
        ::after,
        ::before {
            box-sizing: border-box;
            border-width: 0;
            border-style: solid;
            border-color: #e5e7eb
        }

        ::after,
        ::before {
            --tw-content: ''
        }

        :host,
        html {
            line-height: 1.5;
            -webkit-text-size-adjust: 100%;
            -moz-tab-size: 4;
            tab-size: 4;
            font-family: ui-sans-serif, system-ui, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
            font-feature-settings: normal;
            font-variation-settings: normal;
            -webkit-tap-highlight-color: transparent
        }

        body {
            margin: 0;
            line-height: inherit
        }

        hr {
            height: 0;
            color: inherit;
            border-top-width: 1px
        }

        abbr:where([title]) {
            -webkit-text-decoration: underline dotted;
            text-decoration: underline dotted
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-size: inherit;
            font-weight: inherit
        }

        a {
            color: inherit;
            text-decoration: inherit
        }

        b,
        strong {
            font-weight: bolder
        }

        code,
        kbd,
        pre,
        samp {
            font-family: ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
            font-feature-settings: normal;
            font-variation-settings: normal;
            font-size: 1em
        }

        small {
            font-size: 80%
        }

        sub,
        sup {
            font-size: 75%;
            line-height: 0;
            position: relative;
            vertical-align: baseline
        }

        sub {
            bottom: -.25em
        }

        sup {
            top: -.5em
        }

        table {
            text-indent: 0;
            border-color: inherit;
            border-collapse: collapse
        }

        button,
        input,
        optgroup,
        select,
        textarea {
            font-family: inherit;
            font-feature-settings: inherit;
            font-variation-settings: inherit;
            font-size: 100%;
            font-weight: inherit;
            line-height: inherit;
            letter-spacing: inherit;
            color: inherit;
            margin: 0;
            padding: 0
        }

        button,
        select {
            text-transform: none
        }

        button,
        input:where([type=button]),
        input:where([type=reset]),
        input:where([type=submit]) {
            -webkit-appearance: button;
            background-color: transparent;
            background-image: none
        }

        :-moz-focusring {
            outline: auto
        }

        :-moz-ui-invalid {
            box-shadow: none
        }

        progress {
            vertical-align: baseline
        }

        ::-webkit-inner-spin-button,
        ::-webkit-outer-spin-button {
            height: auto
        }

        [type=search] {
            -webkit-appearance: textfield;
            outline-offset: -2px
        }

        ::-webkit-search-decoration {
            -webkit-appearance: none
        }

        ::-webkit-file-upload-button {
            -webkit-appearance: button;
            font: inherit
        }

        summary {
            display: list-item
        }

        blockquote,
        dd,
        dl,
        figure,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        hr,
        p,
        pre {
            margin: 0
        }

        fieldset {
            margin: 0;
            padding: 0
        }

        legend {
            padding: 0
        }

        menu,
        ol,
        ul {
            list-style: none;
            margin: 0;
            padding: 0
        }

        dialog {
            padding: 0
        }

        textarea {
            resize: vertical
        }

        input::placeholder,
        textarea::placeholder {
            opacity: 1;
            color: #9ca3af
        }

        [role=button],
        button {
            cursor: pointer
        }

        :disabled {
            cursor: default
        }

        audio,
        canvas,
        embed,
        iframe,
        img,
        object,
        svg,
        video {
            display: block;
            vertical-align: middle
        }

        img,
        video {
            max-width: 100%;
            height: auto
        }

        [hidden]:where(:not([hidden=until-found])) {
            display: none
        }

        .fixed {
            position: fixed
        }

        .relative {
            position: relative
        }

        .sticky {
            position: sticky
        }

        .inset-0 {
            inset: 0px
        }

        .left-0 {
            left: 0px
        }

        .right-0 {
            right: 0px
        }

        .top-0 {
            top: 0px
        }

        .top-20 {
            top: 5rem
        }

        .z-40 {
            z-index: 40
        }

        .z-50 {
            z-index: 50
        }

        .mx-auto {
            margin-left: auto;
            margin-right: auto
        }

        .mt-0\.5 {
            margin-top: 0.125rem
        }

        .mt-1 {
            margin-top: 0.25rem
        }

        .mt-2 {
            margin-top: 0.5rem
        }

        .inline-block {
            display: inline-block
        }

        .flex {
            display: flex
        }

        .inline-flex {
            display: inline-flex
        }

        .grid {
            display: grid
        }

        .hidden {
            display: none
        }

        .h-0\.5 {
            height: 0.125rem
        }

        .h-1\.5 {
            height: 0.375rem
        }

        .h-10 {
            height: 2.5rem
        }

        .h-11 {
            height: 2.75rem
        }

        .h-12 {
            height: 3rem
        }

        .h-16 {
            height: 4rem
        }

        .h-2 {
            height: 0.5rem
        }

        .h-2\.5 {
            height: 0.625rem
        }

        .h-20 {
            height: 5rem
        }

        .h-5 {
            height: 1.25rem
        }

        .h-8 {
            height: 2rem
        }

        .h-9 {
            height: 2.25rem
        }

        .h-full {
            height: 100%
        }

        .min-h-\[calc\(884px-20rem\)\] {
            min-height: calc(884px - 20rem)
        }

        .w-1\.5 {
            width: 0.375rem
        }

        .w-10 {
            width: 2.5rem
        }

        .w-12 {
            width: 3rem
        }

        .w-16 {
            width: 4rem
        }

        .w-2 {
            width: 0.5rem
        }

        .w-5 {
            width: 1.25rem
        }

        .w-8 {
            width: 2rem
        }

        .w-9 {
            width: 2.25rem
        }

        .w-auto {
            width: auto
        }

        .w-full {
            width: 100%
        }

        .max-w-2xl {
            max-width: 42rem
        }

        .max-w-\[1280px\] {
            max-width: 1280px
        }

        .max-w-lg {
            max-width: 32rem
        }

        .max-w-sm {
            max-width: 24rem
        }

        .shrink-0 {
            flex-shrink: 0
        }

        @keyframes pulse {
            50% {
                opacity: .5
            }
        }

        .animate-pulse {
            animation: pulse 2s cubic-bezier(0.4, 0, 0.6, 1) infinite
        }

        .cursor-pointer {
            cursor: pointer
        }

        .list-disc {
            list-style-type: disc
        }

        .grid-cols-1 {
            grid-template-columns: repeat(1, minmax(0, 1fr))
        }

        .grid-cols-2 {
            grid-template-columns: repeat(2, minmax(0, 1fr))
        }

        .flex-col {
            flex-direction: column
        }

        .flex-wrap {
            flex-wrap: wrap
        }

        .items-start {
            align-items: flex-start
        }

        .items-center {
            align-items: center
        }

        .justify-end {
            justify-content: flex-end
        }

        .justify-center {
            justify-content: center
        }

        .justify-between {
            justify-content: space-between
        }

        .gap-1 {
            gap: 0.25rem
        }

        .gap-1\.5 {
            gap: 0.375rem
        }

        .gap-2 {
            gap: 0.5rem
        }

        .gap-3 {
            gap: 0.75rem
        }

        .gap-4 {
            gap: 1rem
        }

        .gap-space-lg {
            gap: 1.5rem
        }

        .gap-space-md {
            gap: 1rem
        }

        .gap-space-sm {
            gap: 0.5rem
        }

        .gap-space-xl {
            gap: 2.5rem
        }

        .gap-space-xs {
            gap: 0.25rem
        }

        .self-start {
            align-self: flex-start
        }

        .overflow-hidden {
            overflow: hidden
        }

        .overflow-x-auto {
            overflow-x: auto
        }

        .truncate {
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap
        }

        .rounded {
            border-radius: 0.25rem
        }

        .rounded-full {
            border-radius: 9999px
        }

        .rounded-lg {
            border-radius: 0.5rem
        }

        .rounded-xl {
            border-radius: 0.75rem
        }

        .rounded-l-lg {
            border-top-left-radius: 0.5rem;
            border-bottom-left-radius: 0.5rem
        }

        .rounded-r-lg {
            border-top-right-radius: 0.5rem;
            border-bottom-right-radius: 0.5rem
        }

        .border-t {
            border-top-width: 1px
        }

        .border-surface-container {
            --tw-border-opacity: 1;
            border-color: rgb(234 237 255 / var(--tw-border-opacity, 1))
        }

        .bg-on-background\/40 {
            background-color: rgb(19 27 46 / 0.4)
        }

        .bg-outline {
            --tw-bg-opacity: 1;
            background-color: rgb(111 122 110 / var(--tw-bg-opacity, 1))
        }

        .bg-primary {
            --tw-bg-opacity: 1;
            background-color: rgb(0 101 44 / var(--tw-bg-opacity, 1))
        }

        .bg-primary-container {
            --tw-bg-opacity: 1;
            background-color: rgb(21 128 61 / var(--tw-bg-opacity, 1))
        }

        .bg-primary\/10 {
            background-color: rgb(0 101 44 / 0.1)
        }

        .bg-secondary-container {
            --tw-bg-opacity: 1;
            background-color: rgb(140 245 178 / var(--tw-bg-opacity, 1))
        }

        .bg-surface {
            --tw-bg-opacity: 1;
            background-color: rgb(250 248 255 / var(--tw-bg-opacity, 1))
        }

        .bg-surface-container {
            --tw-bg-opacity: 1;
            background-color: rgb(234 237 255 / var(--tw-bg-opacity, 1))
        }

        .bg-surface-container-high {
            --tw-bg-opacity: 1;
            background-color: rgb(226 231 255 / var(--tw-bg-opacity, 1))
        }

        .bg-surface-container-low {
            --tw-bg-opacity: 1;
            background-color: rgb(242 243 255 / var(--tw-bg-opacity, 1))
        }

        .bg-surface-container-lowest {
            --tw-bg-opacity: 1;
            background-color: rgb(255 255 255 / var(--tw-bg-opacity, 1))
        }

        .bg-surface-container-lowest\/95 {
            background-color: rgb(255 255 255 / 0.95)
        }

        .bg-tertiary-fixed {
            --tw-bg-opacity: 1;
            background-color: rgb(255 221 184 / var(--tw-bg-opacity, 1))
        }

        .object-contain {
            object-fit: contain
        }

        .object-cover {
            object-fit: cover
        }

        .p-2 {
            padding: 0.5rem
        }

        .p-3 {
            padding: 0.75rem
        }

        .p-4 {
            padding: 1rem
        }

        .p-6 {
            padding: 1.5rem
        }

        .p-space-lg {
            padding: 1.5rem
        }

        .p-space-md {
            padding: 1rem
        }

        .px-2 {
            padding-left: 0.5rem;
            padding-right: 0.5rem
        }

        .px-2\.5 {
            padding-left: 0.625rem;
            padding-right: 0.625rem
        }

        .px-3 {
            padding-left: 0.75rem;
            padding-right: 0.75rem
        }

        .px-gutter-desktop {
            padding-left: 2rem;
            padding-right: 2rem
        }

        .px-space-md {
            padding-left: 1rem;
            padding-right: 1rem
        }

        .px-space-sm {
            padding-left: 0.5rem;
            padding-right: 0.5rem
        }

        .px-space-xl {
            padding-left: 2.5rem;
            padding-right: 2.5rem
        }

        .py-0\.5 {
            padding-top: 0.125rem;
            padding-bottom: 0.125rem
        }

        .py-1 {
            padding-top: 0.25rem;
            padding-bottom: 0.25rem
        }

        .py-1\.5 {
            padding-top: 0.375rem;
            padding-bottom: 0.375rem
        }

        .py-2 {
            padding-top: 0.5rem;
            padding-bottom: 0.5rem
        }

        .py-2\.5 {
            padding-top: 0.625rem;
            padding-bottom: 0.625rem
        }

        .py-3 {
            padding-top: 0.75rem;
            padding-bottom: 0.75rem
        }

        .py-space-md {
            padding-top: 1rem;
            padding-bottom: 1rem
        }

        .py-space-xl {
            padding-top: 2.5rem;
            padding-bottom: 2.5rem
        }

        .pb-space-xs {
            padding-bottom: 0.25rem
        }

        .pl-4 {
            padding-left: 1rem
        }

        .pr-1 {
            padding-right: 0.25rem
        }

        .pt-2 {
            padding-top: 0.5rem
        }

        .pt-20 {
            padding-top: 5rem
        }

        .pb-space-lg {
            padding-bottom: 1.5rem
        }

        .pb-space-xl {
            padding-bottom: 2.5rem
        }

        .pt-space-md {
            padding-top: 1rem
        }

        .pt-space-xl {
            padding-top: 2.5rem
        }

        .text-left {
            text-align: left
        }

        .text-center {
            text-align: center
        }

        .font-body-lg {
            font-family: Plus Jakarta Sans
        }

        .font-body-md {
            font-family: Plus Jakarta Sans
        }

        .font-body-sm {
            font-family: Plus Jakarta Sans
        }

        .font-headline-lg {
            font-family: Epilogue
        }

        .font-headline-sm {
            font-family: Epilogue
        }

        .font-label-lg {
            font-family: Plus Jakarta Sans
        }

        .font-label-md {
            font-family: Plus Jakarta Sans
        }

        .font-label-sm {
            font-family: Plus Jakarta Sans
        }

        .font-title-lg {
            font-family: Plus Jakarta Sans
        }

        .font-title-md {
            font-family: Plus Jakarta Sans
        }

        .text-\[14px\] {
            font-size: 14px
        }

        .text-\[16px\] {
            font-size: 16px
        }

        .text-\[18px\] {
            font-size: 18px
        }

        .text-\[20px\] {
            font-size: 20px
        }

        .text-\[24px\] {
            font-size: 24px
        }

        .text-\[28px\] {
            font-size: 28px
        }

        .text-\[32px\] {
            font-size: 32px
        }

        .text-\[36px\] {
            font-size: 36px
        }

        .text-body-lg {
            font-size: 18px;
            line-height: 28px;
            letter-spacing: 0em;
            font-weight: 400
        }

        .text-body-md {
            font-size: 15px;
            line-height: 24px;
            letter-spacing: 0em;
            font-weight: 400
        }

        .text-body-sm {
            font-size: 13px;
            line-height: 20px;
            letter-spacing: 0.005em;
            font-weight: 400
        }

        .text-headline-lg {
            font-size: 40px;
            line-height: 48px;
            letter-spacing: -0.015em;
            font-weight: 700
        }

        .text-headline-sm {
            font-size: 20px;
            line-height: 28px;
            letter-spacing: -0.005em;
            font-weight: 600
        }

        .text-label-lg {
            font-size: 14px;
            line-height: 20px;
            letter-spacing: 0.01em;
            font-weight: 600
        }

        .text-label-md {
            font-size: 12px;
            line-height: 16px;
            letter-spacing: 0.02em;
            font-weight: 600
        }

        .text-label-sm {
            font-size: 10px;
            line-height: 14px;
            letter-spacing: 0.04em;
            font-weight: 700
        }

        .text-title-lg {
            font-size: 18px;
            line-height: 26px;
            letter-spacing: -0.005em;
            font-weight: 600
        }

        .text-title-md {
            font-size: 16px;
            line-height: 24px;
            letter-spacing: 0em;
            font-weight: 600
        }

        .font-medium {
            font-weight: 500
        }

        .font-semibold {
            font-weight: 600
        }

        .uppercase {
            text-transform: uppercase
        }

        .leading-none {
            line-height: 1
        }

        .leading-tight {
            line-height: 1.25
        }

        .tracking-tight {
            letter-spacing: -0.025em
        }

        .tracking-wider {
            letter-spacing: 0.05em
        }

        .text-error {
            --tw-text-opacity: 1;
            color: rgb(186 26 26 / var(--tw-text-opacity, 1))
        }

        .text-on-primary {
            --tw-text-opacity: 1;
            color: rgb(255 255 255 / var(--tw-text-opacity, 1))
        }

        .text-on-secondary-container {
            --tw-text-opacity: 1;
            color: rgb(0 114 65 / var(--tw-text-opacity, 1))
        }

        .text-on-surface {
            --tw-text-opacity: 1;
            color: rgb(19 27 46 / var(--tw-text-opacity, 1))
        }

        .text-on-surface-variant {
            --tw-text-opacity: 1;
            color: rgb(63 73 63 / var(--tw-text-opacity, 1))
        }

        .text-on-tertiary-fixed {
            --tw-text-opacity: 1;
            color: rgb(42 23 0 / var(--tw-text-opacity, 1))
        }

        .text-outline {
            --tw-text-opacity: 1;
            color: rgb(111 122 110 / var(--tw-text-opacity, 1))
        }

        .text-primary {
            --tw-text-opacity: 1;
            color: rgb(0 101 44 / var(--tw-text-opacity, 1))
        }

        .text-tertiary {
            --tw-text-opacity: 1;
            color: rgb(123 77 0 / var(--tw-text-opacity, 1))
        }

        .antialiased {
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale
        }

        .accent-primary {
            accent-color: #00652c
        }

        .opacity-60 {
            opacity: 0.6
        }

        .shadow-\[0_1px_8px_rgba\(0\2c 0\2c 0\2c 0\.04\)\] {
            --tw-shadow: 0 1px 8px rgba(0, 0, 0, 0.04);
            --tw-shadow-colored: 0 1px 8px var(--tw-shadow-color);
            box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)
        }

        .shadow-\[0_4px_12px_-2px_rgba\(21\2c 128\2c 61\2c 0\.2\)\] {
            --tw-shadow: 0 4px 12px -2px rgba(21, 128, 61, 0.2);
            --tw-shadow-colored: 0 4px 12px -2px var(--tw-shadow-color);
            box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)
        }

        .shadow-sm {
            --tw-shadow: 0 1px 2px 0 rgb(0 0 0 / 0.05);
            --tw-shadow-colored: 0 1px 2px 0 var(--tw-shadow-color);
            box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)
        }

        .shadow-xl {
            --tw-shadow: 0 20px 25px -5px rgb(0 0 0 / 0.1), 0 8px 10px -6px rgb(0 0 0 / 0.1);
            --tw-shadow-colored: 0 20px 25px -5px var(--tw-shadow-color), 0 8px 10px -6px var(--tw-shadow-color);
            box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)
        }

        .shadow-\[0_-1px_8px_rgba\(0\2c 0\2c 0\2c 0\.03\)\] {
            --tw-shadow: 0 -1px 8px rgba(0, 0, 0, 0.03);
            --tw-shadow-colored: 0 -1px 8px var(--tw-shadow-color);
            box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)
        }

        .backdrop-blur-sm {
            --tw-backdrop-blur: blur(4px);
            -webkit-backdrop-filter: var(--tw-backdrop-blur) var(--tw-backdrop-brightness) var(--tw-backdrop-contrast) var(--tw-backdrop-grayscale) var(--tw-backdrop-hue-rotate) var(--tw-backdrop-invert) var(--tw-backdrop-opacity) var(--tw-backdrop-saturate) var(--tw-backdrop-sepia);
            backdrop-filter: var(--tw-backdrop-blur) var(--tw-backdrop-brightness) var(--tw-backdrop-contrast) var(--tw-backdrop-grayscale) var(--tw-backdrop-hue-rotate) var(--tw-backdrop-invert) var(--tw-backdrop-opacity) var(--tw-backdrop-saturate) var(--tw-backdrop-sepia)
        }

        .backdrop-blur-xl {
            --tw-backdrop-blur: blur(24px);
            -webkit-backdrop-filter: var(--tw-backdrop-blur) var(--tw-backdrop-brightness) var(--tw-backdrop-contrast) var(--tw-backdrop-grayscale) var(--tw-backdrop-hue-rotate) var(--tw-backdrop-invert) var(--tw-backdrop-opacity) var(--tw-backdrop-saturate) var(--tw-backdrop-sepia);
            backdrop-filter: var(--tw-backdrop-blur) var(--tw-backdrop-brightness) var(--tw-backdrop-contrast) var(--tw-backdrop-grayscale) var(--tw-backdrop-hue-rotate) var(--tw-backdrop-invert) var(--tw-backdrop-opacity) var(--tw-backdrop-saturate) var(--tw-backdrop-sepia)
        }

        .transition-all {
            transition-property: all;
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
            transition-duration: 150ms
        }

        .transition-colors {
            transition-property: color, background-color, border-color, fill, stroke, -webkit-text-decoration-color;
            transition-property: color, background-color, border-color, text-decoration-color, fill, stroke;
            transition-property: color, background-color, border-color, text-decoration-color, fill, stroke, -webkit-text-decoration-color;
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
            transition-duration: 150ms
        }

        .duration-300 {
            transition-duration: 300ms
        }

        .hover\:bg-primary:hover {
            --tw-bg-opacity: 1;
            background-color: rgb(0 101 44 / var(--tw-bg-opacity, 1))
        }

        .hover\:bg-secondary-container\/20:hover {
            background-color: rgb(140 245 178 / 0.2)
        }

        .hover\:bg-secondary-container\/30:hover {
            background-color: rgb(140 245 178 / 0.3)
        }

        .hover\:bg-secondary-fixed:hover {
            --tw-bg-opacity: 1;
            background-color: rgb(143 248 180 / var(--tw-bg-opacity, 1))
        }

        .hover\:bg-surface-container:hover {
            --tw-bg-opacity: 1;
            background-color: rgb(234 237 255 / var(--tw-bg-opacity, 1))
        }

        .hover\:bg-surface-container-high:hover {
            --tw-bg-opacity: 1;
            background-color: rgb(226 231 255 / var(--tw-bg-opacity, 1))
        }

        .hover\:bg-surface-variant:hover {
            --tw-bg-opacity: 1;
            background-color: rgb(218 226 253 / var(--tw-bg-opacity, 1))
        }

        .hover\:bg-primary-container:hover {
            --tw-bg-opacity: 1;
            background-color: rgb(21 128 61 / var(--tw-bg-opacity, 1))
        }

        .hover\:text-on-surface:hover {
            --tw-text-opacity: 1;
            color: rgb(19 27 46 / var(--tw-text-opacity, 1))
        }

        .hover\:text-on-primary:hover {
            --tw-text-opacity: 1;
            color: rgb(255 255 255 / var(--tw-text-opacity, 1))
        }

        .hover\:text-primary:hover {
            --tw-text-opacity: 1;
            color: rgb(0 101 44 / var(--tw-text-opacity, 1))
        }

        .focus\:bg-surface-container-lowest:focus {
            --tw-bg-opacity: 1;
            background-color: rgb(255 255 255 / var(--tw-bg-opacity, 1))
        }

        .focus\:outline-none:focus {
            outline: 2px solid transparent;
            outline-offset: 2px
        }

        @media (min-width: 640px) {
            .sm\:w-auto {
                width: auto
            }

            .sm\:flex-row {
                flex-direction: row
            }
        }

        @media (min-width: 768px) {
            .md\:block {
                display: block
            }

            .md\:flex {
                display: flex
            }

            .md\:grid-cols-2 {
                grid-template-columns: repeat(2, minmax(0, 1fr))
            }

            .md\:grid-cols-3 {
                grid-template-columns: repeat(3, minmax(0, 1fr))
            }
        }

        @media (min-width: 1024px) {
            .lg\:col-span-4 {
                grid-column: span 4 / span 4
            }

            .lg\:col-span-8 {
                grid-column: span 8 / span 8
            }

            .lg\:col-span-2 {
                grid-column: span 2 / span 2
            }

            .lg\:col-span-3 {
                grid-column: span 3 / span 3
            }

            .lg\:flex {
                display: flex
            }

            .lg\:grid-cols-12 {
                grid-template-columns: repeat(12, minmax(0, 1fr))
            }

            .lg\:flex-row {
                flex-direction: row
            }

            .lg\:items-center {
                align-items: center
            }

            .lg\:justify-between {
                justify-content: space-between
            }

            .lg\:self-auto {
                align-self: auto
            }
        }

        @media (min-width: 1280px) {
            .xl\:flex {
                display: flex
            }
        }
    </style>
    <style>
        *,
        ::before,
        ::after {
            --tw-border-spacing-x: 0;
            --tw-border-spacing-y: 0;
            --tw-translate-x: 0;
            --tw-translate-y: 0;
            --tw-rotate: 0;
            --tw-skew-x: 0;
            --tw-skew-y: 0;
            --tw-scale-x: 1;
            --tw-scale-y: 1;
            --tw-pan-x: ;
            --tw-pan-y: ;
            --tw-pinch-zoom: ;
            --tw-scroll-snap-strictness: proximity;
            --tw-gradient-from-position: ;
            --tw-gradient-via-position: ;
            --tw-gradient-to-position: ;
            --tw-ordinal: ;
            --tw-slashed-zero: ;
            --tw-numeric-figure: ;
            --tw-numeric-spacing: ;
            --tw-numeric-fraction: ;
            --tw-ring-inset: ;
            --tw-ring-offset-width: 0px;
            --tw-ring-offset-color: #fff;
            --tw-ring-color: rgb(59 130 246 / 0.5);
            --tw-ring-offset-shadow: 0 0 #0000;
            --tw-ring-shadow: 0 0 #0000;
            --tw-shadow: 0 0 #0000;
            --tw-shadow-colored: 0 0 #0000;
            --tw-blur: ;
            --tw-brightness: ;
            --tw-contrast: ;
            --tw-grayscale: ;
            --tw-hue-rotate: ;
            --tw-invert: ;
            --tw-saturate: ;
            --tw-sepia: ;
            --tw-drop-shadow: ;
            --tw-backdrop-blur: ;
            --tw-backdrop-brightness: ;
            --tw-backdrop-contrast: ;
            --tw-backdrop-grayscale: ;
            --tw-backdrop-hue-rotate: ;
            --tw-backdrop-invert: ;
            --tw-backdrop-opacity: ;
            --tw-backdrop-saturate: ;
            --tw-backdrop-sepia: ;
            --tw-contain-size: ;
            --tw-contain-layout: ;
            --tw-contain-paint: ;
            --tw-contain-style:
        }

        ::backdrop {
            --tw-border-spacing-x: 0;
            --tw-border-spacing-y: 0;
            --tw-translate-x: 0;
            --tw-translate-y: 0;
            --tw-rotate: 0;
            --tw-skew-x: 0;
            --tw-skew-y: 0;
            --tw-scale-x: 1;
            --tw-scale-y: 1;
            --tw-pan-x: ;
            --tw-pan-y: ;
            --tw-pinch-zoom: ;
            --tw-scroll-snap-strictness: proximity;
            --tw-gradient-from-position: ;
            --tw-gradient-via-position: ;
            --tw-gradient-to-position: ;
            --tw-ordinal: ;
            --tw-slashed-zero: ;
            --tw-numeric-figure: ;
            --tw-numeric-spacing: ;
            --tw-numeric-fraction: ;
            --tw-ring-inset: ;
            --tw-ring-offset-width: 0px;
            --tw-ring-offset-color: #fff;
            --tw-ring-color: rgb(59 130 246 / 0.5);
            --tw-ring-offset-shadow: 0 0 #0000;
            --tw-ring-shadow: 0 0 #0000;
            --tw-shadow: 0 0 #0000;
            --tw-shadow-colored: 0 0 #0000;
            --tw-blur: ;
            --tw-brightness: ;
            --tw-contrast: ;
            --tw-grayscale: ;
            --tw-hue-rotate: ;
            --tw-invert: ;
            --tw-saturate: ;
            --tw-sepia: ;
            --tw-drop-shadow: ;
            --tw-backdrop-blur: ;
            --tw-backdrop-brightness: ;
            --tw-backdrop-contrast: ;
            --tw-backdrop-grayscale: ;
            --tw-backdrop-hue-rotate: ;
            --tw-backdrop-invert: ;
            --tw-backdrop-opacity: ;
            --tw-backdrop-saturate: ;
            --tw-backdrop-sepia: ;
            --tw-contain-size: ;
            --tw-contain-layout: ;
            --tw-contain-paint: ;
            --tw-contain-style:
        }

        /* ! tailwindcss v3.4.17 | MIT License | https://tailwindcss.com */
        *,
        ::after,
        ::before {
            box-sizing: border-box;
            border-width: 0;
            border-style: solid;
            border-color: #e5e7eb
        }

        ::after,
        ::before {
            --tw-content: ''
        }

        :host,
        html {
            line-height: 1.5;
            -webkit-text-size-adjust: 100%;
            -moz-tab-size: 4;
            tab-size: 4;
            font-family: ui-sans-serif, system-ui, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
            font-feature-settings: normal;
            font-variation-settings: normal;
            -webkit-tap-highlight-color: transparent
        }

        body {
            margin: 0;
            line-height: inherit
        }

        hr {
            height: 0;
            color: inherit;
            border-top-width: 1px
        }

        abbr:where([title]) {
            -webkit-text-decoration: underline dotted;
            text-decoration: underline dotted
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-size: inherit;
            font-weight: inherit
        }

        a {
            color: inherit;
            text-decoration: inherit
        }

        b,
        strong {
            font-weight: bolder
        }

        code,
        kbd,
        pre,
        samp {
            font-family: ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
            font-feature-settings: normal;
            font-variation-settings: normal;
            font-size: 1em
        }

        small {
            font-size: 80%
        }

        sub,
        sup {
            font-size: 75%;
            line-height: 0;
            position: relative;
            vertical-align: baseline
        }

        sub {
            bottom: -.25em
        }

        sup {
            top: -.5em
        }

        table {
            text-indent: 0;
            border-color: inherit;
            border-collapse: collapse
        }

        button,
        input,
        optgroup,
        select,
        textarea {
            font-family: inherit;
            font-feature-settings: inherit;
            font-variation-settings: inherit;
            font-size: 100%;
            font-weight: inherit;
            line-height: inherit;
            letter-spacing: inherit;
            color: inherit;
            margin: 0;
            padding: 0
        }

        button,
        select {
            text-transform: none
        }

        button,
        input:where([type=button]),
        input:where([type=reset]),
        input:where([type=submit]) {
            -webkit-appearance: button;
            background-color: transparent;
            background-image: none
        }

        :-moz-focusring {
            outline: auto
        }

        :-moz-ui-invalid {
            box-shadow: none
        }

        progress {
            vertical-align: baseline
        }

        ::-webkit-inner-spin-button,
        ::-webkit-outer-spin-button {
            height: auto
        }

        [type=search] {
            -webkit-appearance: textfield;
            outline-offset: -2px
        }

        ::-webkit-search-decoration {
            -webkit-appearance: none
        }

        ::-webkit-file-upload-button {
            -webkit-appearance: button;
            font: inherit
        }

        summary {
            display: list-item
        }

        blockquote,
        dd,
        dl,
        figure,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        hr,
        p,
        pre {
            margin: 0
        }

        fieldset {
            margin: 0;
            padding: 0
        }

        legend {
            padding: 0
        }

        menu,
        ol,
        ul {
            list-style: none;
            margin: 0;
            padding: 0
        }

        dialog {
            padding: 0
        }

        textarea {
            resize: vertical
        }

        input::placeholder,
        textarea::placeholder {
            opacity: 1;
            color: #9ca3af
        }

        [role=button],
        button {
            cursor: pointer
        }

        :disabled {
            cursor: default
        }

        audio,
        canvas,
        embed,
        iframe,
        img,
        object,
        svg,
        video {
            display: block;
            vertical-align: middle
        }

        img,
        video {
            max-width: 100%;
            height: auto
        }

        [hidden]:where(:not([hidden=until-found])) {
            display: none
        }

        .fixed {
            position: fixed
        }

        .relative {
            position: relative
        }

        .sticky {
            position: sticky
        }

        .inset-0 {
            inset: 0px
        }

        .left-0 {
            left: 0px
        }

        .right-0 {
            right: 0px
        }

        .top-0 {
            top: 0px
        }

        .top-20 {
            top: 5rem
        }

        .z-40 {
            z-index: 40
        }

        .z-50 {
            z-index: 50
        }

        .mx-auto {
            margin-left: auto;
            margin-right: auto
        }

        .mt-0\.5 {
            margin-top: 0.125rem
        }

        .mt-1 {
            margin-top: 0.25rem
        }

        .mt-2 {
            margin-top: 0.5rem
        }

        .inline-block {
            display: inline-block
        }

        .flex {
            display: flex
        }

        .inline-flex {
            display: inline-flex
        }

        .grid {
            display: grid
        }

        .hidden {
            display: none
        }

        .h-0\.5 {
            height: 0.125rem
        }

        .h-1\.5 {
            height: 0.375rem
        }

        .h-10 {
            height: 2.5rem
        }

        .h-11 {
            height: 2.75rem
        }

        .h-12 {
            height: 3rem
        }

        .h-16 {
            height: 4rem
        }

        .h-2 {
            height: 0.5rem
        }

        .h-2\.5 {
            height: 0.625rem
        }

        .h-20 {
            height: 5rem
        }

        .h-5 {
            height: 1.25rem
        }

        .h-8 {
            height: 2rem
        }

        .h-9 {
            height: 2.25rem
        }

        .h-full {
            height: 100%
        }

        .min-h-\[calc\(884px-20rem\)\] {
            min-height: calc(884px - 20rem)
        }

        .w-1\.5 {
            width: 0.375rem
        }

        .w-10 {
            width: 2.5rem
        }

        .w-12 {
            width: 3rem
        }

        .w-16 {
            width: 4rem
        }

        .w-2 {
            width: 0.5rem
        }

        .w-5 {
            width: 1.25rem
        }

        .w-8 {
            width: 2rem
        }

        .w-9 {
            width: 2.25rem
        }

        .w-auto {
            width: auto
        }

        .w-full {
            width: 100%
        }

        .max-w-2xl {
            max-width: 42rem
        }

        .max-w-\[1280px\] {
            max-width: 1280px
        }

        .max-w-lg {
            max-width: 32rem
        }

        .max-w-sm {
            max-width: 24rem
        }

        .shrink-0 {
            flex-shrink: 0
        }

        @keyframes pulse {
            50% {
                opacity: .5
            }
        }

        .animate-pulse {
            animation: pulse 2s cubic-bezier(0.4, 0, 0.6, 1) infinite
        }

        .cursor-pointer {
            cursor: pointer
        }

        .list-disc {
            list-style-type: disc
        }

        .grid-cols-1 {
            grid-template-columns: repeat(1, minmax(0, 1fr))
        }

        .grid-cols-2 {
            grid-template-columns: repeat(2, minmax(0, 1fr))
        }

        .flex-col {
            flex-direction: column
        }

        .flex-wrap {
            flex-wrap: wrap
        }

        .items-start {
            align-items: flex-start
        }

        .items-center {
            align-items: center
        }

        .justify-end {
            justify-content: flex-end
        }

        .justify-center {
            justify-content: center
        }

        .justify-between {
            justify-content: space-between
        }

        .gap-1 {
            gap: 0.25rem
        }

        .gap-1\.5 {
            gap: 0.375rem
        }

        .gap-2 {
            gap: 0.5rem
        }

        .gap-3 {
            gap: 0.75rem
        }

        .gap-4 {
            gap: 1rem
        }

        .gap-space-lg {
            gap: 1.5rem
        }

        .gap-space-md {
            gap: 1rem
        }

        .gap-space-sm {
            gap: 0.5rem
        }

        .gap-space-xl {
            gap: 2.5rem
        }

        .gap-space-xs {
            gap: 0.25rem
        }

        .self-start {
            align-self: flex-start
        }

        .overflow-hidden {
            overflow: hidden
        }

        .overflow-x-auto {
            overflow-x: auto
        }

        .truncate {
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap
        }

        .rounded {
            border-radius: 0.25rem
        }

        .rounded-full {
            border-radius: 9999px
        }

        .rounded-lg {
            border-radius: 0.5rem
        }

        .rounded-xl {
            border-radius: 0.75rem
        }

        .rounded-l-lg {
            border-top-left-radius: 0.5rem;
            border-bottom-left-radius: 0.5rem
        }

        .rounded-r-lg {
            border-top-right-radius: 0.5rem;
            border-bottom-right-radius: 0.5rem
        }

        .border-t {
            border-top-width: 1px
        }

        .border-surface-container {
            --tw-border-opacity: 1;
            border-color: rgb(234 237 255 / var(--tw-border-opacity, 1))
        }

        .bg-on-background\/40 {
            background-color: rgb(19 27 46 / 0.4)
        }

        .bg-outline {
            --tw-bg-opacity: 1;
            background-color: rgb(111 122 110 / var(--tw-bg-opacity, 1))
        }

        .bg-primary {
            --tw-bg-opacity: 1;
            background-color: rgb(0 101 44 / var(--tw-bg-opacity, 1))
        }

        .bg-primary-container {
            --tw-bg-opacity: 1;
            background-color: rgb(21 128 61 / var(--tw-bg-opacity, 1))
        }

        .bg-primary\/10 {
            background-color: rgb(0 101 44 / 0.1)
        }

        .bg-secondary-container {
            --tw-bg-opacity: 1;
            background-color: rgb(140 245 178 / var(--tw-bg-opacity, 1))
        }

        .bg-surface {
            --tw-bg-opacity: 1;
            background-color: rgb(250 248 255 / var(--tw-bg-opacity, 1))
        }

        .bg-surface-container {
            --tw-bg-opacity: 1;
            background-color: rgb(234 237 255 / var(--tw-bg-opacity, 1))
        }

        .bg-surface-container-high {
            --tw-bg-opacity: 1;
            background-color: rgb(226 231 255 / var(--tw-bg-opacity, 1))
        }

        .bg-surface-container-low {
            --tw-bg-opacity: 1;
            background-color: rgb(242 243 255 / var(--tw-bg-opacity, 1))
        }

        .bg-surface-container-lowest {
            --tw-bg-opacity: 1;
            background-color: rgb(255 255 255 / var(--tw-bg-opacity, 1))
        }

        .bg-surface-container-lowest\/95 {
            background-color: rgb(255 255 255 / 0.95)
        }

        .bg-tertiary-fixed {
            --tw-bg-opacity: 1;
            background-color: rgb(255 221 184 / var(--tw-bg-opacity, 1))
        }

        .object-contain {
            object-fit: contain
        }

        .object-cover {
            object-fit: cover
        }

        .p-2 {
            padding: 0.5rem
        }

        .p-3 {
            padding: 0.75rem
        }

        .p-4 {
            padding: 1rem
        }

        .p-6 {
            padding: 1.5rem
        }

        .p-space-lg {
            padding: 1.5rem
        }

        .p-space-md {
            padding: 1rem
        }

        .px-2 {
            padding-left: 0.5rem;
            padding-right: 0.5rem
        }

        .px-2\.5 {
            padding-left: 0.625rem;
            padding-right: 0.625rem
        }

        .px-3 {
            padding-left: 0.75rem;
            padding-right: 0.75rem
        }

        .px-gutter-desktop {
            padding-left: 2rem;
            padding-right: 2rem
        }

        .px-space-md {
            padding-left: 1rem;
            padding-right: 1rem
        }

        .px-space-sm {
            padding-left: 0.5rem;
            padding-right: 0.5rem
        }

        .px-space-xl {
            padding-left: 2.5rem;
            padding-right: 2.5rem
        }

        .py-0\.5 {
            padding-top: 0.125rem;
            padding-bottom: 0.125rem
        }

        .py-1 {
            padding-top: 0.25rem;
            padding-bottom: 0.25rem
        }

        .py-1\.5 {
            padding-top: 0.375rem;
            padding-bottom: 0.375rem
        }

        .py-2 {
            padding-top: 0.5rem;
            padding-bottom: 0.5rem
        }

        .py-2\.5 {
            padding-top: 0.625rem;
            padding-bottom: 0.625rem
        }

        .py-3 {
            padding-top: 0.75rem;
            padding-bottom: 0.75rem
        }

        .py-space-md {
            padding-top: 1rem;
            padding-bottom: 1rem
        }

        .py-space-xl {
            padding-top: 2.5rem;
            padding-bottom: 2.5rem
        }

        .pb-space-xs {
            padding-bottom: 0.25rem
        }

        .pl-4 {
            padding-left: 1rem
        }

        .pr-1 {
            padding-right: 0.25rem
        }

        .pt-2 {
            padding-top: 0.5rem
        }

        .pt-20 {
            padding-top: 5rem
        }

        .pb-space-lg {
            padding-bottom: 1.5rem
        }

        .pb-space-xl {
            padding-bottom: 2.5rem
        }

        .pt-space-md {
            padding-top: 1rem
        }

        .pt-space-xl {
            padding-top: 2.5rem
        }

        .text-left {
            text-align: left
        }

        .text-center {
            text-align: center
        }

        .font-body-lg {
            font-family: Plus Jakarta Sans
        }

        .font-body-md {
            font-family: Plus Jakarta Sans
        }

        .font-body-sm {
            font-family: Plus Jakarta Sans
        }

        .font-headline-lg {
            font-family: Epilogue
        }

        .font-headline-sm {
            font-family: Epilogue
        }

        .font-label-lg {
            font-family: Plus Jakarta Sans
        }

        .font-label-md {
            font-family: Plus Jakarta Sans
        }

        .font-label-sm {
            font-family: Plus Jakarta Sans
        }

        .font-title-lg {
            font-family: Plus Jakarta Sans
        }

        .font-title-md {
            font-family: Plus Jakarta Sans
        }

        .text-\[14px\] {
            font-size: 14px
        }

        .text-\[16px\] {
            font-size: 16px
        }

        .text-\[18px\] {
            font-size: 18px
        }

        .text-\[20px\] {
            font-size: 20px
        }

        .text-\[24px\] {
            font-size: 24px
        }

        .text-\[28px\] {
            font-size: 28px
        }

        .text-\[32px\] {
            font-size: 32px
        }

        .text-\[36px\] {
            font-size: 36px
        }

        .text-body-lg {
            font-size: 18px;
            line-height: 28px;
            letter-spacing: 0em;
            font-weight: 400
        }

        .text-body-md {
            font-size: 15px;
            line-height: 24px;
            letter-spacing: 0em;
            font-weight: 400
        }

        .text-body-sm {
            font-size: 13px;
            line-height: 20px;
            letter-spacing: 0.005em;
            font-weight: 400
        }

        .text-headline-lg {
            font-size: 40px;
            line-height: 48px;
            letter-spacing: -0.015em;
            font-weight: 700
        }

        .text-headline-sm {
            font-size: 20px;
            line-height: 28px;
            letter-spacing: -0.005em;
            font-weight: 600
        }

        .text-label-lg {
            font-size: 14px;
            line-height: 20px;
            letter-spacing: 0.01em;
            font-weight: 600
        }

        .text-label-md {
            font-size: 12px;
            line-height: 16px;
            letter-spacing: 0.02em;
            font-weight: 600
        }

        .text-label-sm {
            font-size: 10px;
            line-height: 14px;
            letter-spacing: 0.04em;
            font-weight: 700
        }

        .text-title-lg {
            font-size: 18px;
            line-height: 26px;
            letter-spacing: -0.005em;
            font-weight: 600
        }

        .text-title-md {
            font-size: 16px;
            line-height: 24px;
            letter-spacing: 0em;
            font-weight: 600
        }

        .font-medium {
            font-weight: 500
        }

        .font-semibold {
            font-weight: 600
        }

        .uppercase {
            text-transform: uppercase
        }

        .leading-none {
            line-height: 1
        }

        .leading-tight {
            line-height: 1.25
        }

        .tracking-tight {
            letter-spacing: -0.025em
        }

        .tracking-wider {
            letter-spacing: 0.05em
        }

        .text-error {
            --tw-text-opacity: 1;
            color: rgb(186 26 26 / var(--tw-text-opacity, 1))
        }

        .text-on-primary {
            --tw-text-opacity: 1;
            color: rgb(255 255 255 / var(--tw-text-opacity, 1))
        }

        .text-on-secondary-container {
            --tw-text-opacity: 1;
            color: rgb(0 114 65 / var(--tw-text-opacity, 1))
        }

        .text-on-surface {
            --tw-text-opacity: 1;
            color: rgb(19 27 46 / var(--tw-text-opacity, 1))
        }

        .text-on-surface-variant {
            --tw-text-opacity: 1;
            color: rgb(63 73 63 / var(--tw-text-opacity, 1))
        }

        .text-on-tertiary-fixed {
            --tw-text-opacity: 1;
            color: rgb(42 23 0 / var(--tw-text-opacity, 1))
        }

        .text-outline {
            --tw-text-opacity: 1;
            color: rgb(111 122 110 / var(--tw-text-opacity, 1))
        }

        .text-primary {
            --tw-text-opacity: 1;
            color: rgb(0 101 44 / var(--tw-text-opacity, 1))
        }

        .text-tertiary {
            --tw-text-opacity: 1;
            color: rgb(123 77 0 / var(--tw-text-opacity, 1))
        }

        .antialiased {
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale
        }

        .accent-primary {
            accent-color: #00652c
        }

        .shadow-\[0_1px_8px_rgba\(0\2c 0\2c 0\2c 0\.04\)\] {
            --tw-shadow: 0 1px 8px rgba(0, 0, 0, 0.04);
            --tw-shadow-colored: 0 1px 8px var(--tw-shadow-color);
            box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)
        }

        .shadow-\[0_4px_12px_-2px_rgba\(21\2c 128\2c 61\2c 0\.2\)\] {
            --tw-shadow: 0 4px 12px -2px rgba(21, 128, 61, 0.2);
            --tw-shadow-colored: 0 4px 12px -2px var(--tw-shadow-color);
            box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)
        }

        .shadow-sm {
            --tw-shadow: 0 1px 2px 0 rgb(0 0 0 / 0.05);
            --tw-shadow-colored: 0 1px 2px 0 var(--tw-shadow-color);
            box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)
        }

        .shadow-xl {
            --tw-shadow: 0 20px 25px -5px rgb(0 0 0 / 0.1), 0 8px 10px -6px rgb(0 0 0 / 0.1);
            --tw-shadow-colored: 0 20px 25px -5px var(--tw-shadow-color), 0 8px 10px -6px var(--tw-shadow-color);
            box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)
        }

        .shadow-\[0_-1px_8px_rgba\(0\2c 0\2c 0\2c 0\.03\)\] {
            --tw-shadow: 0 -1px 8px rgba(0, 0, 0, 0.03);
            --tw-shadow-colored: 0 -1px 8px var(--tw-shadow-color);
            box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)
        }

        .backdrop-blur-sm {
            --tw-backdrop-blur: blur(4px);
            -webkit-backdrop-filter: var(--tw-backdrop-blur) var(--tw-backdrop-brightness) var(--tw-backdrop-contrast) var(--tw-backdrop-grayscale) var(--tw-backdrop-hue-rotate) var(--tw-backdrop-invert) var(--tw-backdrop-opacity) var(--tw-backdrop-saturate) var(--tw-backdrop-sepia);
            backdrop-filter: var(--tw-backdrop-blur) var(--tw-backdrop-brightness) var(--tw-backdrop-contrast) var(--tw-backdrop-grayscale) var(--tw-backdrop-hue-rotate) var(--tw-backdrop-invert) var(--tw-backdrop-opacity) var(--tw-backdrop-saturate) var(--tw-backdrop-sepia)
        }

        .backdrop-blur-xl {
            --tw-backdrop-blur: blur(24px);
            -webkit-backdrop-filter: var(--tw-backdrop-blur) var(--tw-backdrop-brightness) var(--tw-backdrop-contrast) var(--tw-backdrop-grayscale) var(--tw-backdrop-hue-rotate) var(--tw-backdrop-invert) var(--tw-backdrop-opacity) var(--tw-backdrop-saturate) var(--tw-backdrop-sepia);
            backdrop-filter: var(--tw-backdrop-blur) var(--tw-backdrop-brightness) var(--tw-backdrop-contrast) var(--tw-backdrop-grayscale) var(--tw-backdrop-hue-rotate) var(--tw-backdrop-invert) var(--tw-backdrop-opacity) var(--tw-backdrop-saturate) var(--tw-backdrop-sepia)
        }

        .transition-all {
            transition-property: all;
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
            transition-duration: 150ms
        }

        .transition-colors {
            transition-property: color, background-color, border-color, fill, stroke, -webkit-text-decoration-color;
            transition-property: color, background-color, border-color, text-decoration-color, fill, stroke;
            transition-property: color, background-color, border-color, text-decoration-color, fill, stroke, -webkit-text-decoration-color;
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
            transition-duration: 150ms
        }

        .duration-300 {
            transition-duration: 300ms
        }

        .hover\:bg-primary:hover {
            --tw-bg-opacity: 1;
            background-color: rgb(0 101 44 / var(--tw-bg-opacity, 1))
        }

        .hover\:bg-secondary-container\/20:hover {
            background-color: rgb(140 245 178 / 0.2)
        }

        .hover\:bg-secondary-container\/30:hover {
            background-color: rgb(140 245 178 / 0.3)
        }

        .hover\:bg-secondary-fixed:hover {
            --tw-bg-opacity: 1;
            background-color: rgb(143 248 180 / var(--tw-bg-opacity, 1))
        }

        .hover\:bg-surface-container:hover {
            --tw-bg-opacity: 1;
            background-color: rgb(234 237 255 / var(--tw-bg-opacity, 1))
        }

        .hover\:bg-surface-container-high:hover {
            --tw-bg-opacity: 1;
            background-color: rgb(226 231 255 / var(--tw-bg-opacity, 1))
        }

        .hover\:bg-surface-variant:hover {
            --tw-bg-opacity: 1;
            background-color: rgb(218 226 253 / var(--tw-bg-opacity, 1))
        }

        .hover\:bg-primary-container:hover {
            --tw-bg-opacity: 1;
            background-color: rgb(21 128 61 / var(--tw-bg-opacity, 1))
        }

        .hover\:text-on-surface:hover {
            --tw-text-opacity: 1;
            color: rgb(19 27 46 / var(--tw-text-opacity, 1))
        }

        .hover\:text-on-primary:hover {
            --tw-text-opacity: 1;
            color: rgb(255 255 255 / var(--tw-text-opacity, 1))
        }

        .hover\:text-primary:hover {
            --tw-text-opacity: 1;
            color: rgb(0 101 44 / var(--tw-text-opacity, 1))
        }

        .focus\:bg-surface-container-lowest:focus {
            --tw-bg-opacity: 1;
            background-color: rgb(255 255 255 / var(--tw-bg-opacity, 1))
        }

        .focus\:outline-none:focus {
            outline: 2px solid transparent;
            outline-offset: 2px
        }

        @media (min-width: 640px) {
            .sm\:w-auto {
                width: auto
            }

            .sm\:flex-row {
                flex-direction: row
            }
        }

        @media (min-width: 768px) {
            .md\:block {
                display: block
            }

            .md\:flex {
                display: flex
            }

            .md\:grid-cols-2 {
                grid-template-columns: repeat(2, minmax(0, 1fr))
            }

            .md\:grid-cols-3 {
                grid-template-columns: repeat(3, minmax(0, 1fr))
            }
        }

        @media (min-width: 1024px) {
            .lg\:col-span-4 {
                grid-column: span 4 / span 4
            }

            .lg\:col-span-8 {
                grid-column: span 8 / span 8
            }

            .lg\:col-span-2 {
                grid-column: span 2 / span 2
            }

            .lg\:col-span-3 {
                grid-column: span 3 / span 3
            }

            .lg\:flex {
                display: flex
            }

            .lg\:grid-cols-12 {
                grid-template-columns: repeat(12, minmax(0, 1fr))
            }

            .lg\:flex-row {
                flex-direction: row
            }

            .lg\:items-center {
                align-items: center
            }

            .lg\:justify-between {
                justify-content: space-between
            }

            .lg\:self-auto {
                align-self: auto
            }
        }

        @media (min-width: 1280px) {
            .xl\:flex {
                display: flex
            }
        }
    </style>
</head>

<body class="bg-surface font-body-md text-on-surface antialiased" data-mode="connect">
    <header
        class="fixed top-0 left-0 right-0 z-50 bg-surface-container-lowest/95 backdrop-blur-xl shadow-[0_1px_8px_rgba(0,0,0,0.04)]">
        <div
            class="h-20 w-full px-gutter-desktop max-w-[1280px] mx-auto flex items-center justify-between gap-space-md">
            <div class="flex items-center gap-space-sm shrink-0"><img alt="Lentera Nusantara Academy Logo"
                    class="h-8 w-auto object-contain"
                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuDLWXMptoml_Tvl36bDsX1yJo4Q41vVw57AlrOn0f2vFYk5ic58UpLSC6ntWjjZqZxqHx2-qI54GpOOmIISbWIcWd_2x9w-9G5yReSvknLfNqhQioi_ZW3BbAMGVcx1SXY9DPZLHWv8JljHal7hGQc65a8k5hZ-wwXcwjoNy9-3VFNbMXHeBduAwvDROL9pQyoTbKd1FG3zrJYmy6mY20Vgu1sBWn5bMFi-C8cLzQw">
                <div class="flex flex-col"><span
                        class="font-headline-sm text-headline-sm text-primary leading-none tracking-tight">SMA Lentera
                        Nusantara</span><span
                        class="font-label-sm text-label-sm text-outline tracking-wider mt-0.5 uppercase">Unggul,
                        Berkarakter &amp; Berwawasan Global</span></div>
            </div>
            <nav class="hidden xl:flex items-center gap-space-xs"
                data-active-classes="bg-surface-container text-primary font-title-md rounded-lg"><a
                    class="px-space-sm py-2 rounded-lg font-title-md text-title-md text-on-surface-variant hover:bg-surface-container hover:text-on-surface transition-all"
                    data-path="beranda" href="#">Beranda</a><a
                    class="px-space-sm py-2 rounded-lg font-title-md text-title-md text-on-surface-variant hover:bg-surface-container hover:text-on-surface transition-all"
                    data-path="alur-dan-tahapan-ppdb" href="#">Alur &amp; Tahapan PPDB</a><a aria-current="page"
                    class="px-space-sm py-2 transition-all bg-surface-container text-primary font-title-md rounded-lg"
                    data-path="formulir-pendaftaran" href="#">Formulir Pendaftaran</a><a
                    class="px-space-sm py-2 rounded-lg font-title-md text-title-md text-on-surface-variant hover:bg-surface-container hover:text-on-surface transition-all"
                    data-path="berita-dan-blog" href="#">Berita &amp; Blog</a></nav>
            <div class="flex items-center gap-space-md shrink-0">
                <div
                    class="hidden lg:flex items-center gap-space-xs bg-surface-container-low px-space-sm py-1.5 rounded-full">
                    <span class="material-symbols-outlined text-primary text-[18px]">headset_mic</span>
                    <div class="flex flex-col text-left"><span
                            class="font-label-sm text-label-sm text-on-surface-variant leading-tight">Bantuan
                            PPDB</span><span class="font-label-md text-label-md text-primary leading-tight">(021)
                            7890-1234</span></div>
                </div>
                <div
                    class="hidden md:flex items-center gap-space-xs bg-surface-container-low px-space-sm py-1.5 rounded-full">
                    <img alt="Profile" class="w-8 h-8 rounded-full object-cover"
                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuBbCdh0cUh_zB-CJu6tzZWAUeYuA5de3m5CWdhnlFpbNPjiK3zJDvRLZnG1qfTZgDkVqsl6AlI08sU0b-p0r3RBGxt7JQHzYIgCJQwfeoAiFmJxOYO1UL5HdPDBO0qk7g43SjYW4gskp-UNfQA4XtJVwkz37uZuM_cLiEiYPW0q5DwnTsfchsIP2zIh5Z1Nu4ocb-QTfGmj_KFAedrM7BDBEVrO9rgM90G30QA9o48">
                    <div class="flex flex-col text-left pr-1"><span
                            class="font-label-sm text-label-sm text-on-surface font-title-md leading-tight">Staff
                            Admisi</span><span
                            class="font-label-sm text-label-sm text-primary flex items-center gap-1 leading-tight"><span
                                class="w-1.5 h-1.5 rounded-full bg-primary inline-block"></span>Layanan Online</span>
                    </div>
                </div><a
                    class="bg-primary-container text-on-primary px-space-md py-2.5 rounded-lg font-label-lg text-label-lg shadow-[0_4px_12px_-2px_rgba(21,128,61,0.2)] hover:bg-primary transition-colors flex items-center gap-1.5"
                    data-path="formulir-pendaftaran" href="#"><span>Daftar Sekarang</span><span
                        class="material-symbols-outlined text-[16px]">arrow_forward</span></a>
            </div>
        </div>
    </header>
    <main class="w-full pt-20 bg-surface min-h-[calc(884px-20rem)]"
        data-stitch-vh="min-h-[calc(884px-20rem)]===min-h-[calc(100vh-20rem)]">
        <div class="relative flex flex-col w-full overflow-hidden bg-gradient-to-b from-surface-container-low via-surface to-surface">
            <!-- Ambient Academic Pattern -->
            <div class="absolute inset-0 pointer-events-none opacity-40">
                <svg class="w-full h-full" xmlns="http://www.w3.org/2000/svg">
                    <defs>
                        <pattern height="48" id="academic-grid-form" patternunits="userSpaceOnUse" width="48">
                            <circle cx="2" cy="2" fill="#00652c" opacity="0.12" r="1.5"></circle>
                        </pattern>
                    </defs>
                    <rect fill="url(#academic-grid-form)" height="100%" width="100%"></rect>
                </svg>
            </div>
            <div class="absolute top-12 left-1/4 w-96 h-96 rounded-full bg-secondary-container/30 blur-3xl pointer-events-none"></div>
            <div class="absolute -top-10 right-10 w-80 h-80 rounded-full bg-tertiary-fixed/40 blur-3xl pointer-events-none"></div>

            <!-- Page Header & Banner -->
            <section class="relative z-10 w-full py-space-xl">
                <div class="max-w-[1280px] mx-auto px-gutter-desktop">
                    <div class="flex flex-col lg:flex-row lg:items-center lg:justify-between gap-space-lg">
                        <div class="flex flex-col gap-space-xs max-w-2xl">
                            <div
                                class="inline-flex items-center gap-2 self-start px-3 py-1 rounded-full bg-secondary-container text-on-secondary-container">
                                <span class="w-2 h-2 rounded-full bg-primary animate-pulse"></span>
                                <span class="font-label-sm text-label-sm uppercase tracking-wider">Tahun Pelajaran
                                    2025/2026 • Gelombang I</span>
                            </div>
                            <h1 class="font-headline-lg text-headline-lg text-on-surface tracking-tight">Formulir
                                Pendaftaran Siswa Baru</h1>
                            <p class="font-body-lg text-body-lg text-on-surface-variant">Pastikan data yang diisi sesuai
                                dengan dokumen resmi (KK, Akta Kelahiran, dan Ijazah/Rapor).</p>
                        </div>
                        <!-- Academic Seal & Verification Pill -->
                        <div
                            class="flex items-center gap-space-md p-space-md rounded-xl bg-surface-container-lowest shadow-sm self-start lg:self-auto">
                            <div
                                class="w-12 h-12 rounded-full bg-primary/10 flex items-center justify-center text-primary shrink-0">
                                <span class="material-symbols-outlined text-[28px]">verified_user</span>
                            </div>
                            <div class="flex flex-col">
                                <span class="font-title-md text-title-md text-on-surface">Penerimaan Siswa Baru
                                    Mandiri</span>
                                <span class="font-label-sm text-label-sm text-outline">Enkripsi Berkas Terproteksi SSL
                                    256-Bit</span>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Interactive Wizard Stepper Rail -->
            <section class="relative w-full bg-surface-container-lowest/95 backdrop-blur-md sticky top-20 z-40 shadow-sm">
                <div class="max-w-[1280px] mx-auto px-gutter-desktop py-space-md">
                    <div class="flex items-center justify-between overflow-x-auto no-scrollbar gap-space-md"
                        id="stepperNav">
                        <!-- Step 1 -->
                        <div class="flex items-center gap-3 shrink-0 cursor-pointer step-indicator" data-step="1"
                            onclick="switchStep(1)">
                            <div class="w-9 h-9 rounded-full bg-secondary-container text-primary flex items-center justify-center font-label-lg text-label-lg"
                                id="stepBadge1"><span class="material-symbols-outlined text-[18px]">check</span></div>
                            <div class="flex flex-col text-left">
                                <span class="font-label-sm text-label-sm text-primary uppercase">Langkah 01</span>
                                <span class="font-title-md text-title-md text-on-surface">Data Pribadi Siswa</span>
                            </div>
                        </div>
                        <div class="h-0.5 w-12 bg-primary shrink-0 hidden md:block"></div>
                        <!-- Step 2 -->
                        <div class="flex items-center gap-3 shrink-0 cursor-pointer step-indicator" data-step="2"
                            onclick="switchStep(2)">
                            <div class="w-9 h-9 rounded-full bg-secondary-container text-primary flex items-center justify-center font-label-lg text-label-lg"
                                id="stepBadge2"><span class="material-symbols-outlined text-[18px]">check</span></div>
                            <div class="flex flex-col text-left">
                                <span class="font-label-sm text-label-sm text-outline uppercase">Langkah 02</span>
                                <span class="font-title-md text-title-md text-on-surface-variant">Peminatan Jenjang</span>
                            </div>
                        </div>
                        <div class="h-0.5 w-12 bg-surface-container shrink-0 hidden md:block"></div>
                        <!-- Step 3 -->
                        <div class="flex items-center gap-3 shrink-0 cursor-pointer step-indicator" data-step="3"
                            onclick="switchStep(3)">
                            <div class="w-9 h-9 rounded-full bg-secondary-container text-primary flex items-center justify-center font-label-lg text-label-lg"
                                id="stepBadge3"><span class="material-symbols-outlined text-[18px]">check</span></div>
                            <div class="flex flex-col text-left">
                                <span class="font-label-sm text-label-sm text-outline uppercase">Langkah 03</span>
                                <span class="font-title-md text-title-md text-on-surface-variant">Data Orang Tua</span>
                            </div>
                        </div>
                        <div class="h-0.5 w-12 bg-surface-container shrink-0 hidden md:block"></div>
                        <!-- Step 4 -->
                        <div class="flex items-center gap-3 shrink-0 cursor-pointer step-indicator" data-step="4"
                            onclick="switchStep(4)">
                            <div class="w-9 h-9 rounded-full bg-secondary-container text-primary flex items-center justify-center font-label-lg text-label-lg"
                                id="stepBadge4"><span class="material-symbols-outlined text-[18px]">check</span></div>
                            <div class="flex flex-col text-left">
                                <span class="font-label-sm text-label-sm text-outline uppercase">Langkah 04</span>
                                <span class="font-title-md text-title-md text-on-surface-variant">Asal Sekolah</span>
                            </div>
                        </div>
                        <div class="h-0.5 w-12 bg-surface-container shrink-0 hidden md:block"></div>
                        <!-- Step 5 -->
                        <div class="flex items-center gap-3 shrink-0 cursor-pointer step-indicator" data-step="5"
                            onclick="switchStep(5)">
                            <div class="w-9 h-9 rounded-full bg-primary-container text-on-primary flex items-center justify-center font-label-lg text-label-lg shadow-sm"
                                id="stepBadge5"><span>5</span></div>
                            <div class="flex flex-col text-left">
                                <span class="font-label-sm text-label-sm text-outline uppercase">Langkah 05</span>
                                <span class="font-title-md text-title-md text-on-surface-variant">Unggah Berkas</span>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Main Multi-step Content Canvas -->
            <section class="relative z-10 w-full py-space-xl">
                <div class="max-w-[1280px] mx-auto px-gutter-desktop">
                    <div class="grid grid-cols-1 lg:grid-cols-12 gap-space-xl">
                        <!-- Form Fields Left Column -->
                        <div class="lg:col-span-8 flex flex-col gap-space-lg">
                            @if ($errors->any())
                                <div class="rounded-lg bg-error-container text-on-error-container p-4">
                                    <ul class="list-disc pl-5">
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <form class="flex flex-col gap-space-lg" id="ppdbForm" method="POST"
                                action="{{ route('formulirpendaftaran.store') }}" enctype="multipart/form-data">
                                @csrf
                                <!-- STEP 1: DATA IDENTITAS SISWA -->
                                <div class="step-panel flex flex-col gap-space-md hidden" id="stepSection1">
                                    <div
                                        class="bg-surface-container-lowest p-space-lg rounded-xl shadow-sm flex flex-col gap-space-md">
                                        <div class="flex items-center justify-between pb-space-xs">
                                            <div class="flex items-center gap-2">
                                                <span
                                                    class="material-symbols-outlined text-primary text-[24px]">badge</span>
                                                <h2 class="font-headline-sm text-headline-sm text-on-surface">Data
                                                    Identitas Pribadi Calon Siswa</h2>
                                            </div>
                                            <span
                                                class="font-label-sm text-label-sm px-2 py-0.5 rounded-full bg-secondary-container text-on-secondary-container">Langkah
                                                1/5</span>
                                        </div>
                                        <p class="font-body-sm text-body-sm text-on-surface-variant">Ketikkan informasi
                                            sesuai dengan Nomor Induk Siswa Nasional dan dokumen Kartu Keluarga terbitan
                                            Dukcapil.</p>
                                        <div class="grid grid-cols-1 md:grid-cols-2 gap-space-md mt-2">
                                            <div class="flex flex-col gap-1.5">
                                                <label class="font-label-md text-label-md text-on-surface">Nomor Induk
                                                    Siswa Nasional (NISN) <span class="text-error">*</span></label>
                                                <input
                                                    class="h-12 px-space-md rounded-lg bg-surface-container-low font-body-md text-body-md text-on-surface focus:bg-surface-container-lowest focus:outline-none"
                                                    name="nisn" maxlength="10" placeholder="Contoh: 0071234567" required=""
                                                    type="text" value="{{ old('nisn') }}">
                                                <span class="font-label-sm text-label-sm text-outline">10 digit angka
                                                    resmi Kemendikbudristek</span>
                                            </div>
                                            <div class="flex flex-col gap-1.5">
                                                <label class="font-label-md text-label-md text-on-surface">Nomor Induk
                                                    Kependudukan (NIK) <span class="text-error">*</span></label>
                                                <input
                                                    class="h-12 px-space-md rounded-lg bg-surface-container-low font-body-md text-body-md text-on-surface focus:bg-surface-container-lowest focus:outline-none"
                                                    name="nik" maxlength="16" placeholder="Contoh: 3174092004080001"
                                                    required="" type="text" value="{{ old('nik') }}">
                                                <span class="font-label-sm text-label-sm text-outline">16 digit angka
                                                    tertera di Kartu Keluarga</span>
                                            </div>
                                        </div>
                                        <div class="flex flex-col gap-1.5">
                                            <label class="font-label-md text-label-md text-on-surface">Nama Lengkap
                                                (Sesuai Akta Kelahiran) <span class="text-error">*</span></label>
                                            <input
                                                class="h-12 px-space-md rounded-lg bg-surface-container-low font-body-md text-body-md text-on-surface focus:bg-surface-container-lowest focus:outline-none"
                                                name="nama_lengkap" placeholder="Masukkan nama lengkap tanpa singkatan" required=""
                                                type="text" value="{{ old('nama_lengkap') }}">
                                        </div>
                                        <div class="grid grid-cols-1 md:grid-cols-3 gap-space-md">
                                            <div class="flex flex-col gap-1.5">
                                                <label class="font-label-md text-label-md text-on-surface">Nama
                                                    Panggilan</label>
                                                <input
                                                    class="h-12 px-space-md rounded-lg bg-surface-container-low font-body-md text-body-md text-on-surface focus:bg-surface-container-lowest focus:outline-none"
                                                    name="nama_panggilan" placeholder="Nama panggilan santai" type="text" value="{{ old('nama_panggilan') }}">
                                            </div>
                                            <div class="flex flex-col gap-1.5">
                                                <label class="font-label-md text-label-md text-on-surface">Tempat Lahir
                                                    <span class="text-error">*</span></label>
                                                <input
                                                    class="h-12 px-space-md rounded-lg bg-surface-container-low font-body-md text-body-md text-on-surface focus:bg-surface-container-lowest focus:outline-none"
                                                    name="tempat_lahir" placeholder="Kota/Kabupaten" required="" type="text" value="{{ old('tempat_lahir') }}">
                                            </div>
                                            <div class="flex flex-col gap-1.5">
                                                <label class="font-label-md text-label-md text-on-surface">Tanggal
                                                    Lahir <span class="text-error">*</span></label>
                                                <input
                                                    class="h-12 px-space-md rounded-lg bg-surface-container-low font-body-md text-body-md text-on-surface focus:bg-surface-container-lowest focus:outline-none"
                                                    required="" type="date" name="tanggal_lahir" value="{{ old('tanggal_lahir') }}" value="{{ old('tanggal_lahir') }}">
                                            </div>
                                        </div>
                                        <div class="grid grid-cols-1 md:grid-cols-2 gap-space-md">
                                            <div class="flex flex-col gap-1.5">
                                                <label class="font-label-md text-label-md text-on-surface">Jenis
                                                    Kelamin <span class="text-error">*</span></label>
                                                <div class="grid grid-cols-2 gap-3 h-12">
                                                    <label
                                                        class="flex items-center justify-center gap-2 rounded-lg bg-surface-container-low hover:bg-surface-container px-3 cursor-pointer">
                                                        <input checked="" class="accent-primary" name="gender"
                                                            type="radio" value="L" {{ old('gender', 'L') === 'L' ? 'checked' : '' }}>
                                                        <span
                                                            class="font-body-md text-body-md text-on-surface">Laki-laki</span>
                                                    </label>
                                                    <label
                                                        class="flex items-center justify-center gap-2 rounded-lg bg-surface-container-low hover:bg-surface-container px-3 cursor-pointer">
                                                        <input class="accent-primary" name="gender" type="radio"
                                                            value="P" {{ old('gender') === 'P' ? 'checked' : '' }}>
                                                        <span
                                                            class="font-body-md text-body-md text-on-surface">Perempuan</span>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="flex flex-col gap-1.5">
                                                <label class="font-label-md text-label-md text-on-surface">Agama <span
                                                        class="text-error">*</span></label>
                                                <select
                                                    class="h-12 px-space-md rounded-lg bg-surface-container-low font-body-md text-body-md text-on-surface focus:bg-surface-container-lowest focus:outline-none"
                                                    name="agama" required="">
                                                    <option value="">Pilih Agama</option>
                                                    <option selected="" value="Islam">Islam</option>
                                                    <option value="Kristen Protestan">Tidak Beragama</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="flex flex-col gap-1.5">
                                            <label class="font-label-md text-label-md text-on-surface">Alamat Lengkap
                                                Tempat Tinggal (Domisili) <span class="text-error">*</span></label>
                                            <textarea
                                                class="p-space-md rounded-lg bg-surface-container-low font-body-md text-body-md text-on-surface focus:bg-surface-container-lowest focus:outline-none"
                                                name="alamat" placeholder="Nama Jalan, No. Rumah, RT/RW, Kelurahan, Kecamatan, Kota/Kabupaten, Kode Pos" required=""
                                                rows="3">{{ old('alamat') }}</textarea>
                                        </div>
                                    </div>
                                </div>
                                <!-- STEP 2: PEMINATAN JENJANG -->
                                <div class="step-panel flex flex-col gap-space-md hidden" id="stepSection2">
                                    <div
                                        class="bg-surface-container-lowest p-space-lg rounded-xl shadow-sm flex flex-col gap-space-md">
                                        <div class="flex items-center justify-between">
                                            <div class="flex items-center gap-2">
                                                <span
                                                    class="material-symbols-outlined text-primary text-[24px]">school</span>
                                                <h2 class="font-headline-sm text-headline-sm text-on-surface">Peminatan Jenjang</h2>
                                            </div>
                                            <span
                                                class="font-label-sm text-label-sm px-2 py-0.5 rounded-full bg-secondary-container text-on-secondary-container">Langkah
                                                2/5</span>
                                        </div>
                                        <p class="font-body-sm text-body-sm text-on-surface-variant">Pilih jenjang yang sesuai dengan minat dan tujuan Anda.</p>
                                        <!-- Program Cards Selection -->
                                        <div class="grid grid-cols-1 gap-space-md mt-2">
                                            <!-- MTS -->
                                            <label
                                                class="relative p-space-md rounded-xl bg-surface-container-low hover:bg-secondary-container/30 cursor-pointer transition-all flex items-start gap-4">
                                                <input checked="" class="mt-1 accent-primary" name="jenjang" type="radio" value="MTS">
                                                <div class="flex flex-col gap-1 w-full">
                                                    <div class="flex items-center justify-between">
                                                        <span class="font-title-lg text-title-lg text-primary">MTS</span>
                                                    </div>
                                                    <p class="font-body-sm text-body-sm text-on-surface-variant">Madrasah Tsanawiyah</p>
                                                </div>
                                            </label>
                                            <!-- SMA -->
                                            <label
                                                class="relative p-space-md rounded-xl bg-surface-container-low hover:bg-secondary-container/30 cursor-pointer transition-all flex items-start gap-4">
                                                <input checked="" class="mt-1 accent-primary" name="jenjang" type="radio" value="MTS">
                                                <div class="flex flex-col gap-1 w-full">
                                                    <div class="flex items-center justify-between">
                                                        <span class="font-title-lg text-title-lg text-primary">SMA</span>
                                                    </div>
                                                    <p class="font-body-sm text-body-sm text-on-surface-variant">Sekolah Menengah Atas</p>
                                                </div>
                                            </label>
                                        </div>
                                       
                                    </div>
                                </div>
                                <!-- STEP 3: DATA ORANG TUA / WALI -->
                                <div class="step-panel flex flex-col gap-space-md hidden" id="stepSection3">
                                    <div
                                        class="bg-surface-container-lowest p-space-lg rounded-xl shadow-sm flex flex-col gap-space-md">
                                        <div class="flex items-center justify-between">
                                            <div class="flex items-center gap-2">
                                                <span
                                                    class="material-symbols-outlined text-primary text-[24px]">diversity_3</span>
                                                <h2 class="font-headline-sm text-headline-sm text-on-surface">Data
                                                    Orang Tua / Wali Siswa</h2>
                                            </div>
                                            <span
                                                class="font-label-sm text-label-sm px-2 py-0.5 rounded-full bg-secondary-container text-on-secondary-container">Langkah
                                                3/5</span>
                                        </div>
                                        <p class="font-body-sm text-body-sm text-on-surface-variant">Informasi kontak
                                            orang tua diperlukan untuk koordinasi administrasi akademik, pengumuman
                                            hasil tes, dan rekapitulasi data kesiswaan.</p>
                                        <!-- Data Ayah -->
                                        <div
                                            class="p-space-md rounded-xl bg-surface-container-low flex flex-col gap-space-sm">
                                            <span
                                                class="font-title-md text-title-md text-primary flex items-center gap-2">
                                                <span class="material-symbols-outlined text-[18px]">person</span>
                                                Identitas Ayah Kandung
                                            </span>
                                            <div class="grid grid-cols-1 md:grid-cols-2 gap-space-md">
                                                <div class="flex flex-col gap-1">
                                                    <label class="font-label-md text-label-md text-on-surface">Nama
                                                        Lengkap Ayah <span class="text-error">*</span></label>
                                                    <input
                                                        class="h-11 px-3 rounded-lg bg-surface-container-lowest font-body-md text-body-md text-on-surface focus:outline-none"
                                                        placeholder="Sesuai KTP / Akta" type="text" name="nama_ayah" value="{{ old('nama_ayah') }}">
                                                </div>
                                                <div class="flex flex-col gap-1">
                                                    <label class="font-label-md text-label-md text-on-surface">NIK Ayah
                                                        <span class="text-error">*</span></label>
                                                    <input
                                                        class="h-11 px-3 rounded-lg bg-surface-container-lowest font-body-md text-body-md text-on-surface focus:outline-none"
                                                        maxlength="16" placeholder="16 digit NIK" type="text" name="nik_ayah" value="{{ old('nik_ayah') }}">
                                                </div>
                                            </div>
                                            <div class="grid grid-cols-1 md:grid-cols-3 gap-space-md">
                                                <div class="flex flex-col gap-1">
                                                    <label
                                                        class="font-label-md text-label-md text-on-surface">Pekerjaan</label>
                                                    <select name="pekerjaan_ayah"
                                                        class="h-11 px-3 rounded-lg bg-surface-container-lowest font-body-md text-body-md text-on-surface focus:outline-none">
                                                        <option value="PNS / TNI / POLRI" @selected(old('pekerjaan_ayah') === 'PNS / TNI / POLRI')>PNS / TNI / POLRI</option>
                                                        <option value="Karyawan Swasta" @selected(old('pekerjaan_ayah', 'Karyawan Swasta') === 'Karyawan Swasta')>Karyawan Swasta</option>
                                                        <option value="Wiraswasta / Profesional" @selected(old('pekerjaan_ayah') === 'Wiraswasta / Profesional')>Wiraswasta / Profesional</option>
                                                        <option value="Dosen / Pendidik" @selected(old('pekerjaan_ayah') === 'Dosen / Pendidik')>Dosen / Pendidik</option>
                                                        <option value="Lainnya" @selected(old('pekerjaan_ayah') === 'Lainnya')>Lainnya</option>
                                                    </select>
                                                </div>
                                                <div class="flex flex-col gap-1">
                                                    <label
                                                        class="font-label-md text-label-md text-on-surface">Pendidikan
                                                        Terakhir</label>
                                                    <select name="pendidikan_ayah"
                                                        class="h-11 px-3 rounded-lg bg-surface-container-lowest font-body-md text-body-md text-on-surface focus:outline-none">
                                                        <option value="SD / Sederajat" @selected(old('pendidikan_ayah') === 'SD / Sederajat')>SD / Sederajat</option>
                                                        <option value="SMP / Sederajat" @selected(old('pendidikan_ayah') === 'SMP / Sederajat')>SMP / Sederajat</option>
                                                        <option value="SMA / Sederajat" @selected(old('pendidikan_ayah', 'SMA / Sederajat') === 'SMA / Sederajat')>SMA / Sederajat</option>
                                                        <option value="Diploma (D3/D4)" @selected(old('pendidikan_ayah') === 'Diploma (D3/D4)')>Diploma (D3/D4)</option>
                                                        <option value="Sarjana (S1)" @selected(old('pendidikan_ayah') === 'Sarjana (S1)')>Sarjana (S1)</option>
                                                        <option value="Magister (S2)" @selected(old('pendidikan_ayah') === 'Magister (S2)')>Magister (S2)</option>
                                                        <option value="Doktor (S3)" @selected(old('pendidikan_ayah') === 'Doktor (S3)')>Doktor (S3)</option>
                                                        <option value="Lainya" @selected(old('pendidikan_ayah') === 'Lainya')>Lainya</option>
                                                    </select>
                                                </div>
                                                <div class="flex flex-col gap-1">
                                                    <label class="font-label-md text-label-md text-on-surface">No.
                                                        Telepon / WA Ayah <span class="text-error">*</span></label>
                                                    <input
                                                        class="h-11 px-3 rounded-lg bg-surface-container-lowest font-body-md text-body-md text-on-surface focus:outline-none"
                                                        placeholder="08xxxxxxxxxx" type="tel" name="telepon_ayah" value="{{ old('telepon_ayah') }}">
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Data Ibu -->
                                        <div
                                            class="p-space-md rounded-xl bg-surface-container-low flex flex-col gap-space-sm">
                                            <span
                                                class="font-title-md text-title-md text-primary flex items-center gap-2">
                                                <span
                                                    class="material-symbols-outlined text-[18px]">person_outline</span>
                                                Identitas Ibu Kandung
                                            </span>
                                            <div class="grid grid-cols-1 md:grid-cols-2 gap-space-md">
                                                <div class="flex flex-col gap-1">
                                                    <label class="font-label-md text-label-md text-on-surface">Nama
                                                        Lengkap Ibu <span class="text-error">*</span></label>
                                                    <input
                                                        class="h-11 px-3 rounded-lg bg-surface-container-lowest font-body-md text-body-md text-on-surface focus:outline-none"
                                                        placeholder="Sesuai KTP / Akta" type="text" name="nama_ibu" value="{{ old('nama_ibu') }}">
                                                </div>
                                                <div class="flex flex-col gap-1">
                                                    <label class="font-label-md text-label-md text-on-surface">NIK Ibu
                                                        <span class="text-error">*</span></label>
                                                    <input
                                                        class="h-11 px-3 rounded-lg bg-surface-container-lowest font-body-md text-body-md text-on-surface focus:outline-none"
                                                        maxlength="16" placeholder="16 digit NIK" type="text" name="nik_ibu" value="{{ old('nik_ibu') }}">
                                                </div>
                                            </div>
                                            <div class="grid grid-cols-1 md:grid-cols-3 gap-space-md">
                                                <div class="flex flex-col gap-1">
                                                    <label
                                                        class="font-label-md text-label-md text-on-surface">Pekerjaan</label>
                                                    <select name="pekerjaan_ibu"
                                                        class="h-11 px-3 rounded-lg bg-surface-container-lowest font-body-md text-body-md text-on-surface focus:outline-none">
                                                        <option value="Ibu Rumah Tangga" @selected(old('pekerjaan_ibu') === 'Ibu Rumah Tangga')>Ibu Rumah Tangga</option>
                                                        <option value="PNS / Aparatur Sipil" @selected(old('pekerjaan_ibu') === 'PNS / Aparatur Sipil')>PNS / Aparatur Sipil</option>
                                                        <option value="Karyawan Swasta" @selected(old('pekerjaan_ibu', 'Karyawan Swasta') === 'Karyawan Swasta')>Karyawan Swasta</option>
                                                        <option value="Wiraswasta / Profesional" @selected(old('pekerjaan_ibu') === 'Wiraswasta / Profesional')>Wiraswasta / Profesional</option>
                                                        <option value="Lainnya" @selected(old('pekerjaan_ibu') === 'Lainnya')>Lainnya</option>
                                                    </select>
                                                </div>
                                                <div class="flex flex-col gap-1">
                                                    <label
                                                        class="font-label-md text-label-md text-on-surface">Pendidikan
                                                        Terakhir</label>
                                                    <select name="pendidikan_ibu"
                                                        class="h-11 px-3 rounded-lg bg-surface-container-lowest font-body-md text-body-md text-on-surface focus:outline-none">
                                                        <option value="SD / Sederajat" @selected(old('pendidikan_ibu') === 'SD / Sederajat')>SD / Sederajat</option>
                                                        <option value="SMP / Sederajat" @selected(old('pendidikan_ibu') === 'SMP / Sederajat')>SMP / Sederajat</option>
                                                        <option value="SMA / Sederajat" @selected(old('pendidikan_ibu', 'SMA / Sederajat') === 'SMA / Sederajat')>SMA / Sederajat</option>
                                                        <option value="Diploma (D3/D4)" @selected(old('pendidikan_ibu') === 'Diploma (D3/D4)')>Diploma (D3/D4)</option>
                                                        <option value="Sarjana (S1)" @selected(old('pendidikan_ibu') === 'Sarjana (S1)')>Sarjana (S1)</option>
                                                        <option value="Magister (S2)" @selected(old('pendidikan_ibu') === 'Magister (S2)')>Magister (S2)</option>
                                                        <option value="Doktor (S3)" @selected(old('pendidikan_ibu') === 'Doktor (S3)')>Doktor (S3)</option>
                                                        <option value="Lainya" @selected(old('pendidikan_ibu') === 'Lainya')>Lainya</option>
                                                    </select>
                                                </div>
                                                <div class="flex flex-col gap-1">
                                                    <label class="font-label-md text-label-md text-on-surface">No.
                                                        Telepon / WA Ibu <span class="text-error">*</span></label>
                                                    <input
                                                        class="h-11 px-3 rounded-lg bg-surface-container-lowest font-body-md text-body-md text-on-surface focus:outline-none"
                                                        placeholder="08xxxxxxxxxx" type="tel" name="telepon_ibu" value="{{ old('telepon_ibu') }}">
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Penghasilan Keluarga -->
                                        <div class="flex flex-col gap-1.5">
                                            <label class="font-label-md text-label-md text-on-surface">Estimasi
                                                Rata-rata Penghasilan Total Orang Tua per Bulan</label>
                                            <select name="penghasilan_keluarga"
                                                class="h-12 px-space-md rounded-lg bg-surface-container-low font-body-md text-body-md text-on-surface focus:bg-surface-container-lowest focus:outline-none">
                                                <option value="< Rp 5.000.000 / bulan" @selected(old('penghasilan_keluarga') === '< Rp 5.000.000 / bulan')>&lt; Rp 5.000.000 / bulan</option>
                                                <option value="Rp 5.000.000 - Rp 10.000.000 / bulan" @selected(old('penghasilan_keluarga') === 'Rp 5.000.000 - Rp 10.000.000 / bulan')>Rp 5.000.000 - Rp 10.000.000 / bulan</option>
                                                <option value="Rp 10.000.000 - Rp 25.000.000 / bulan" @selected(old('penghasilan_keluarga', 'Rp 10.000.000 - Rp 25.000.000 / bulan') === 'Rp 10.000.000 - Rp 25.000.000 / bulan')>Rp 10.000.000 - Rp 25.000.000 / bulan</option>
                                                <option value="> Rp 25.000.000 / bulan" @selected(old('penghasilan_keluarga') === '> Rp 25.000.000 / bulan')>&gt; Rp 25.000.000 / bulan</option>
                                            </select>
                                            <span class="font-label-sm text-label-sm text-outline">Informasi bersifat
                                                rahasia untuk klasifikasi beasiswa dan bantuan subsidi silang.</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- STEP 4: RIWAYAT ASAL SEKOLAH -->
                                <div class="step-panel flex flex-col gap-space-md hidden" id="stepSection4">
                                    <div
                                        class="bg-surface-container-lowest p-space-lg rounded-xl shadow-sm flex flex-col gap-space-md">
                                        <div class="flex items-center justify-between">
                                            <div class="flex items-center gap-2">
                                                <span
                                                    class="material-symbols-outlined text-primary text-[24px]">account_balance</span>
                                                <h2 class="font-headline-sm text-headline-sm text-on-surface">Riwayat Pendidikan Sekolah Asal</h2>
                                            </div>
                                            <span
                                                class="font-label-sm text-label-sm px-2 py-0.5 rounded-full bg-secondary-container text-on-secondary-container">Langkah
                                                4/5</span>
                                        </div>
                                        <p class="font-body-sm text-body-sm text-on-surface-variant">Lengkapi data sekolah asal</p>
                                        <div class="grid grid-cols-1 md:grid-cols-2 gap-space-md">
                                            <div class="flex flex-col gap-1.5">
                                                <label class="font-label-md text-label-md text-on-surface">Nama Sekolah
                                                    Asal<span class="text-error">*</span></label>
                                                <input
                                                    class="h-12 px-space-md rounded-lg bg-surface-container-low font-body-md text-body-md text-on-surface focus:bg-surface-container-lowest focus:outline-none"
                                                    placeholder="Contoh: SMP Negeri 1 Jakarta / SMP Labschool"
                                                    required="" type="text" name="nama_sekolah_asal" value="{{ old('nama_sekolah_asal') }}">
                                            </div>
                                            <div class="flex flex-col gap-1.5">
                                               <label class="font-label-md text-label-md text-on-surface">Tahun Kelulusan<span class="text-error">*</span></label>
                                                <select name="tahun_kelulusan" required
                                                    class="h-12 px-space-md rounded-lg bg-surface-container-low font-body-md text-body-md text-on-surface focus:bg-surface-container-lowest focus:outline-none">
                                                    <option value="2026" @selected(old('tahun_kelulusan', '2026') === '2026')>2026</option>
                                                    <option value="2025" @selected(old('tahun_kelulusan') === '2025')>2025</option>
                                                    <option value="2024" @selected(old('tahun_kelulusan') === '2024')>2024</option>
                                                </select>


                                            </div>
                                        </div>
                                        <div class="flex flex-col gap-1.5">
                                            <label class="font-label-md text-label-md text-on-surface">Alamat Lengkap
                                                Sekolah Asal</label>
                                            <textarea
                                                class="p-space-md rounded-lg bg-surface-container-low font-body-md text-body-md text-on-surface focus:bg-surface-container-lowest focus:outline-none"
                                                placeholder="Nama Jalan, Kota/Kabupaten, Provinsi sekolah asal" rows="2" name="alamat_sekolah_asal">{{ old('alamat_sekolah_asal') }}</textarea>
                                        </div>
                                    </div>
                                </div>
                                <!-- STEP 5: AREA UNGGAH DOKUMEN & VERIFIKASI -->
                                <div class="step-panel flex flex-col gap-space-md" id="stepSection5">
                                    <div
                                        class="bg-surface-container-lowest p-space-lg rounded-xl shadow-sm flex flex-col gap-space-md">
                                        <div class="flex items-center justify-between">
                                            <div class="flex items-center gap-2">
                                                <span
                                                    class="material-symbols-outlined text-primary text-[24px]">cloud_upload</span>
                                                <h2 class="font-headline-sm text-headline-sm text-on-surface">Unggah
                                                    Berkas Persyaratan &amp; Dokumen</h2>
                                            </div>
                                            <span
                                                class="font-label-sm text-label-sm px-2 py-0.5 rounded-full bg-secondary-container text-on-secondary-container">Langkah
                                                5/5</span>
                                        </div>
                                        <p class="font-body-sm text-body-sm text-on-surface-variant">Format dokumen
                                            yang didukung: PDF, JPG, atau PNG (Maksimum 2.5 MB per berkas). Pastikan
                                            teks dokumen terbaca jelas.</p>
                                        <!-- Grid Upload Boxes -->
                                        <div class="grid grid-cols-1 md:grid-cols-2 gap-space-md">



                                            <!-- Box 1: Pas Foto -->
                                           <div
                                                class="p-space-md rounded-xl bg-surface-container-low flex flex-col gap-3">
                                                <div class="flex items-center justify-between">
                                                    <span class="font-title-md text-title-md text-on-surface">1. Pas
                                                        Foto Berwarna<span class="text-error">*</span></span>
                                                    <span
                                                        class="font-label-sm text-label-sm px-2 py-0.5 rounded bg-secondary-container text-on-secondary-container">JPG/PNG</span>
                                                </div>
                                                <p class="font-body-sm text-body-sm text-on-surface-variant">Latar
                                                    belakang merah, berpakaian seragam rapi atau kemeja
                                                    berkerah.</p>               
                                            <label class="block mt-2 cursor-pointer">
                                                <input
                                                    class="hidden"
                                                    type="file"
                                                    name="pas_foto"
                                                    accept="image/jpeg,image/png"
                                                    required
                                                >

                                                <div class="p-6 rounded-lg bg-surface-container-lowest flex flex-col items-center justify-center text-center hover:bg-secondary-container/20 transition-all border border-dashed border-outline">
                                                    <span class="material-symbols-outlined text-[32px] text-primary">
                                                        add_photo_alternate
                                                    </span>
                                                    <span class="font-label-md text-label-md text-primary mt-1">
                                                        Pilih File Foto
                                                    </span>
                                                    <span class="font-label-sm text-label-sm text-outline">
                                                        atau drag &amp; drop ke sini
                                                    </span>
                                                </div>
                                            </label>

                                            @error('pas_foto')
                                                <p class="text-error font-label-sm">{{ $message }}</p>
                                            @enderror
                                                <!-- Mock uploaded state -->
                                             <!-- <div
                                                    class="flex items-center justify-between p-2 rounded bg-surface-container text-on-surface-variant text-body-sm font-body-sm">
                                                    <span class="truncate flex items-center gap-1.5"><span
                                                            class="material-symbols-outlined text-[16px] text-primary">check_circle</span>
                                                        pasfoto_calonsiswa.jpg</span>
                                                    <span class="text-outline text-label-sm">480 KB</span>
                                                </div> -->


                                            <div id="preview-pas-foto" class="hidden flex items-center justify-between p-2 rounded bg-surface-container text-on-surface-variant text-body-sm font-body-sm">

                                                <span class="truncate flex items-center gap-1.5 min-w-0">
                                                    <span class="material-symbols-outlined text-[16px] text-primary">
                                                        check_circle
                                                    </span>
                                                    <span id="nama-pas-foto" class="truncate"></span>
                                                </span>

                                                <span id="ukuran-pas-foto"
                                                    class="text-outline text-label-sm whitespace-nowrap ml-2">
                                                </span>
                                            </div>

                                            </div>
                                            



















                                            <!-- Box 2: Kartu Keluarga -->
                                            <div
                                                class="p-space-md rounded-xl bg-surface-container-low flex flex-col gap-3">
                                                <div class="flex items-center justify-between">
                                                    <span class="font-title-md text-title-md text-on-surface">2. Scan
                                                        Kartu Keluarga (KK) <span class="text-error">*</span></span>
                                                    <span
                                                        class="font-label-sm text-label-sm px-2 py-0.5 rounded bg-surface-container text-on-surface-variant">PDF/JPG</span>
                                                </div>
                                                <p class="font-body-sm text-body-sm text-on-surface-variant">Scan
                                                    dokumen asli dengan barcode resmi Dukcapil yang terbaca jelas.</p>
                                                <input class="mt-2 w-full" type="file" name="kartu_keluarga" accept="application/pdf,image/jpeg,image/png" required>
                                                @error('kartu_keluarga')<p class="text-error font-label-sm">{{ $message }}</p>@enderror
                                                <div
                                                    class="p-6 rounded-lg bg-surface-container-lowest flex flex-col items-center justify-center text-center cursor-pointer hover:bg-secondary-container/20 transition-all">
                                                    <span
                                                        class="material-symbols-outlined text-[32px] text-primary">description</span>
                                                    <span class="font-label-md text-label-md text-primary mt-1">Pilih
                                                        Berkas KK</span>
                                                    <span class="font-label-sm text-label-sm text-outline">Maks. 2
                                                        MB</span>
                                                </div>
                                                <div
                                                    class="flex items-center justify-between p-2 rounded bg-surface-container text-on-surface-variant text-body-sm font-body-sm">
                                                    <span class="truncate flex items-center gap-1.5"><span
                                                            class="material-symbols-outlined text-[16px] text-primary">check_circle</span>
                                                        kartu_keluarga_legalisir.pdf</span>
                                                    <span class="text-outline text-label-sm">1.1 MB</span>
                                                </div>
                                            </div>
                                            <!-- Box 3: Scan Ijazah -->
                                            <div
                                                class="p-space-md rounded-xl bg-surface-container-low flex flex-col gap-3">
                                                <div class="flex items-center justify-between">
                                                    <span class="font-title-md text-title-md text-on-surface">3. Scan Ijazah <span class="text-error">*</span></span>
                                                    <span
                                                        class="font-label-sm text-label-sm px-2 py-0.5 rounded bg-surface-container text-on-surface-variant">PDF</span>
                                                </div>
                                                <p class="font-body-sm text-body-sm text-on-surface-variant">Scan ijazah Anda dalam format PDF.</p>
                                                <input class="mt-2 w-full" type="file" name="ijazah" accept="application/pdf" required>
                                                @error('ijazah')<p class="text-error font-label-sm">{{ $message }}</p>@enderror
                                                <div
                                                    class="p-6 rounded-lg bg-surface-container-lowest flex flex-col items-center justify-center text-center cursor-pointer hover:bg-secondary-container/20 transition-all">
                                                    <span
                                                        class="material-symbols-outlined text-[32px] text-primary">folder_open</span>
                                                    <span class="font-label-md text-label-md text-primary mt-1">Unggah
                                                        PDF Ijazah</span>
                                                    <span class="font-label-sm text-label-sm text-outline">Maks. 5
                                                        MB</span>
                                                </div>
                                            </div>
                                            <!-- Box 4: Akta -->
                                            <div
                                                class="p-space-md rounded-xl bg-surface-container-low flex flex-col gap-3">
                                                <div class="flex items-center justify-between">
                                                    <span class="font-title-md text-title-md text-on-surface">4. Scan Akta Kelahiran <span class="text-error">*</span></span>
                                                    <span
                                                        class="font-label-sm text-label-sm px-2 py-0.5 rounded bg-surface-container text-on-surface-variant">PDF</span>
                                                </div>
                                                <p class="font-body-sm text-body-sm text-on-surface-variant">Scan akta kelahiran Anda dalam format PDF.</p>
                                                <input class="mt-2 w-full" type="file" name="akta_kelahiran" accept="application/pdf" required>
                                                @error('akta_kelahiran')<p class="text-error font-label-sm">{{ $message }}</p>@enderror
                                                <div
                                                    class="p-6 rounded-lg bg-surface-container-lowest flex flex-col items-center justify-center text-center cursor-pointer hover:bg-secondary-container/20 transition-all">
                                                    <span
                                                        class="material-symbols-outlined text-[32px] text-primary">folder_open</span>
                                                    <span class="font-label-md text-label-md text-primary mt-1">Unggah
                                                        PDF Akta Kelahiran</span>
                                                    <span class="font-label-sm text-label-sm text-outline">Maks. 5
                                                        MB</span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Deklarasi & Persetujuan -->
                                        <div
                                            class="p-space-md rounded-xl bg-surface-container mt-2 flex flex-col gap-3">
                                            <label class="flex items-start gap-3 cursor-pointer">
                                                <input class="mt-1 accent-primary w-5 h-5 rounded"
                                                    id="declarationCheck" name="pernyataan" value="1" required="" type="checkbox">
                                                <div class="flex flex-col text-on-surface">
                                                    <span class="font-title-md text-title-md">Pernyataan Kebenaran Data
                                                        dan Pakta Integritas</span>
                                                    <span
                                                        class="font-body-sm text-body-sm text-on-surface-variant mt-1">Saya
                                                        menyatakan dengan sesungguhnya bahwa seluruh data yang saya
                                                        isikan pada formulir pendaftaran ini adalah benar, otentik, dan
                                                        dapat dipertanggungjawabkan secara hukum. Apabila di kemudian
                                                        hari ditemukan pemalsuan data, calon siswa bersedia
                                                        didiskualifikasi dari penerimaan siswa baru Ponpes Qothrotul Falah.</span>
                                                </div>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <!-- Form Navigation & Bottom CTA Action Rail -->
                                <div
                                    class="bg-surface-container-lowest p-space-md rounded-xl shadow-sm flex flex-col sm:flex-row items-center justify-between gap-space-md">
                                    <div class="flex items-center gap-space-xs w-full sm:w-auto">
                                        <button
                                            class="px-space-md py-3 rounded-lg bg-surface-container text-on-surface font-label-lg text-label-lg hover:bg-surface-variant transition-colors flex items-center gap-1"
                                            id="prevBtn" onclick="prevStep()" type="button">
                                            <span class="material-symbols-outlined text-[18px]">arrow_back</span>
                                            <span>Kembali</span>
                                        </button>
                                        <button
                                            class="px-space-md py-3 rounded-lg bg-surface-container-low text-on-surface-variant font-label-lg text-label-lg hover:bg-surface-container transition-colors flex items-center gap-1.5"
                                            type="button">
                                            <span class="material-symbols-outlined text-[18px]">save</span>
                                            <span>Simpan Draf Formulir</span>
                                        </button>
                                    </div>
                                    <div class="flex items-center gap-space-xs w-full sm:w-auto justify-end">
                                        <button
                                            class="w-full sm:w-auto px-space-xl py-3 rounded-lg bg-primary-container text-on-primary font-label-lg text-label-lg hover:bg-primary shadow-sm transition-all flex items-center justify-center gap-2 hidden"
                                            id="nextBtn" onclick="nextStep()" type="button">
                                            <span id="nextBtnText">Lanjutkan: Unggah Berkas</span>
                                            <span class="material-symbols-outlined text-[18px]">arrow_forward</span>
                                        </button>
                                        <button
                                            class="w-full sm:w-auto px-space-xl py-3 rounded-lg bg-primary-container text-on-primary font-label-lg text-label-lg hover:bg-primary shadow-sm transition-all flex items-center justify-center gap-2"
                                            id="submitBtn" type="submit" onclick="return document.getElementById('declarationCheck').checked || (alert('Mohon centang pernyataan kebenaran data & pakta integritas sebelum mengirimkan formulir.'), false)">
                                            <span class="material-symbols-outlined text-[20px]">print</span>
                                            <span>Kirim Pendaftaran &amp; Cetak Bukti</span>
                                        </button>
                                    </div>
                                </div>
                                <div
                                    class="flex items-center justify-center gap-2 text-outline font-label-sm text-label-sm">
                                    <span class="material-symbols-outlined text-[16px] text-primary">lock</span>
                                    <span>Data formulir terenkripsi aman secara end-to-end. Tidak disebarluaskan ke
                                        pihak ketiga.</span>
                                </div>
                            </form>
                        </div>
                        <!-- Sidebar Right Column (Panduan & Helpdesk) -->
                        <aside class="lg:col-span-4 flex flex-col gap-space-lg">
                            <!-- Summary Progress Card -->
                            <div
                                class="bg-surface-container-lowest p-space-md rounded-xl shadow-sm flex flex-col gap-space-sm">
                                <span class="font-title-lg text-title-lg text-on-surface">Kelengkapan Formulir</span>
                                <div class="flex items-center justify-between">
                                    <span class="font-label-md text-label-md text-outline">Status Pengisian
                                        Dokumen</span>
                                    <span class="font-title-md text-title-md text-primary"
                                        id="progressPercentage">100% Selesai</span>
                                </div>
                                <!-- Visual Mini Progress Bar -->
                                <div class="w-full h-2.5 rounded-full bg-surface-container overflow-hidden">
                                    <div class="h-full bg-primary rounded-full transition-all duration-300"
                                        id="progressBarFill" style="width: 100%;"></div>
                                </div>
                                <div class="flex flex-col gap-2 mt-2 pt-2 border-t border-surface-container">
                                    <div class="flex items-center justify-between text-body-sm font-body-sm">
                                        <span class="text-on-surface-variant flex items-center gap-2"><span
                                                class="w-2 h-2 rounded-full bg-primary"></span>Data Calon Siswa</span>
                                        <span class="text-primary font-label-sm text-label-sm">Lengkap</span>
                                    </div>
                                    <div class="flex items-center justify-between text-body-sm font-body-sm">
                                        <span class="text-outline flex items-center gap-2"><span
                                                class="w-2 h-2 rounded-full bg-outline"></span>Pilihan Jurusan</span>
                                        <span class="text-outline font-label-sm text-label-sm">Draft</span>
                                    </div>
                                    <div class="flex items-center justify-between text-body-sm font-body-sm">
                                        <span class="text-outline flex items-center gap-2"><span
                                                class="w-2 h-2 rounded-full bg-outline"></span>Data Wali Murid</span>
                                        <span class="text-outline font-label-sm text-label-sm">Menunggu</span>
                                    </div>
                                    <div class="flex items-center justify-between text-body-sm font-body-sm">
                                        <span class="text-outline flex items-center gap-2"><span
                                                class="w-2 h-2 rounded-full bg-outline"></span>Sekolah Asal</span>
                                        <span class="text-outline font-label-sm text-label-sm">Menunggu</span>
                                    </div>
                                    <div class="flex items-center justify-between text-body-sm font-body-sm">
                                        <span class="text-outline flex items-center gap-2"><span
                                                class="w-2 h-2 rounded-full bg-outline"></span>Unggah Dokumen</span>
                                        <span class="text-outline font-label-sm text-label-sm">2/4 Diunggah</span>
                                    </div>
                                </div>
                            </div>
                            <!-- Academic Counselor Photo & Helpdesk Contact -->
                            <div
                                class="bg-surface-container-lowest p-space-md rounded-xl shadow-sm flex flex-col gap-space-sm">
                                <div class="flex items-center gap-3">
                                    <img class="w-12 h-12 rounded-full object-cover"
                                        data-alt="A portrait of an Indonesian admissions counselor woman with friendly smile wearing formal blazer inside a bright modern school office"
                                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuDaU4FnyH6or4fAnF7pY37AKh8tKNMhmwBnRozBnZiPzLlpuS8tNYQ_OMYLeY5fuEF_8VviUjGoYEoGdNjkVaJkSEckN_JCbTfRqmhZuyf9e9b8WSsafNy8p7BAOduI1Qwkn3CrIEGhqxBy6F4MDGTuurc6xtkMCiLw-7cXxrHkFMKzjm5CI1pr3Jw5aIbBGGrSUwNw3XAFf16_pqdXeYqUqxOayq8shEoM0OPT_bw">
                                    <div class="flex flex-col">
                                        <span class="font-title-md text-title-md text-on-surface">Konsultasi &amp; Helpdesk</span>
                                        <span class="font-label-sm text-label-sm text-primary">Petugas(UNKNOWN)</span>
                                    </div>
                                </div>
                                <p class="font-body-sm text-body-sm text-on-surface-variant">Mengalami kendala saat mengunggah berkas? Tim panitia kami siap membimbing Anda.</p>
                                <a class="w-full py-2.5 px-space-md rounded-lg bg-secondary-container hover:bg-secondary-fixed text-on-secondary-container font-label-lg text-label-lg flex items-center justify-center gap-2 transition-colors"
                                    href="https://wa.me/6281278901234" target="_blank">
                                    <span class="material-symbols-outlined text-[18px]">chat</span>
                                    <span>Hotline WhatsApp Panitia</span>
                                </a>
                                <div
                                    class="flex items-center justify-between pt-2 text-outline font-label-sm text-label-sm">
                                    <span class="flex items-center gap-1"><span
                                            class="material-symbols-outlined text-[14px]">call</span> (021)
                                        7890-1234</span>
                                    <span>Senin - Sabtu (08.00 - 15.00)</span>
                                </div>
                            </div>
                            <!-- Ketentuan Pas Foto & Format -->
                            <div
                                class="bg-surface-container-lowest p-space-md rounded-xl shadow-sm flex flex-col gap-space-sm">
                                <div class="flex items-center gap-2 text-primary">
                                    <span class="material-symbols-outlined text-[20px]">info</span>
                                    <span class="font-title-md text-title-md text-on-surface">Petunjuk Penting</span>
                                </div>
                                <ul
                                    class="flex flex-col gap-2 font-body-sm text-body-sm text-on-surface-variant list-disc pl-4">
                                    <li>Pastikan data calon siswa sudah benar</li>
                                    <li>Siapkan dokumen yang diperlukan seperti kartu keluarga,akta kelahiran, dan foto terbaru</li>
                                    <li>Pastikan ukuran dan format file sesuai dengan ketentuan</li>
                                </ul>
                            </div>
                            
                        </aside>
                    </div>
                </div>
            </section>
            <!-- Modal Konfirmasi / Sukses Cetak Bukti (Toggled via JS) -->
            <div class="fixed inset-0 z-50 hidden flex items-center justify-center bg-on-background/40 backdrop-blur-sm p-4"
                id="successModal">
                <div
                    class="bg-surface-container-lowest max-w-lg w-full rounded-xl shadow-xl p-space-lg flex flex-col gap-space-md text-center">
                    <div
                        class="w-16 h-16 rounded-full bg-secondary-container text-primary flex items-center justify-center mx-auto">
                        <span class="material-symbols-outlined text-[36px]">check_circle</span>
                    </div>
                    <div class="flex flex-col gap-1">
                        <span class="font-headline-sm text-headline-sm text-on-surface">Pendaftaran Berhasil
                            Dikirim!</span>
                        <span class="font-body-md text-body-md text-on-surface-variant">Nomor Registrasi PPDB Anda:
                            <strong class="text-primary font-semibold">PPDB-2025-LN88219</strong></span>
                    </div>
                    <div class="p-space-md rounded-lg bg-surface-container-low text-left flex flex-col gap-2">
                        <div class="flex justify-between text-body-sm font-body-sm">
                            <span class="text-outline">Waktu Pengajuan:</span>
                            <span class="text-on-surface font-medium">Hari ini, Terverifikasi</span>
                        </div>
                        <div class="flex justify-between text-body-sm font-body-sm">
                            <span class="text-outline">Program Peminatan:</span>
                            <span class="text-on-surface font-medium">MIPA Unggulan Sains</span>
                        </div>
                        <div class="flex justify-between text-body-sm font-body-sm">
                            <span class="text-outline">Jadwal Tes Minat Bakat CBT:</span>
                            <span class="text-primary font-medium">Sabtu, 12 Juli 2025 (Pukul 08.30 WIB)</span>
                        </div>
                    </div>
                    <div class="flex flex-col sm:flex-row gap-space-xs mt-2">
                        <button
                            class="w-full py-3 rounded-lg bg-surface-container text-on-surface font-label-lg text-label-lg hover:bg-surface-container-high transition-colors"
                            onclick="closeSuccessModal()">
                            Kembali ke Beranda
                        </button>
                        <button
                            class="w-full py-3 rounded-lg bg-primary-container text-on-primary font-label-lg text-label-lg hover:bg-primary transition-colors flex items-center justify-center gap-1.5"
                            onclick="window.print()">
                            <span class="material-symbols-outlined text-[18px]">download</span>
                            <span>Unduh Bukti PDF</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <script>
            let currentStep = 1;
            @if ($errors->hasAny(['nama_ayah','nik_ayah','pekerjaan_ayah','pendidikan_ayah','telepon_ayah','nama_ibu','nik_ibu','pekerjaan_ibu','pendidikan_ibu','telepon_ibu','penghasilan_keluarga']))
                currentStep = 3;
            @elseif ($errors->hasAny(['nama_sekolah_asal','tahun_kelulusan','alamat_sekolah_asal']))
                currentStep = 4;
            @elseif ($errors->hasAny(['pas_foto','kartu_keluarga','ijazah','akta_kelahiran','pernyataan']))
                currentStep = 5;
            @endif
            const totalSteps = 5;

            const stepLabels = [
                "Lanjutkan: Peminatan Jenjang",
                "Lanjutkan: Data Orang Tua",
                "Lanjutkan: Asal Sekolah",
                "Lanjutkan: Unggah Berkas",
                "Selesai & Kirim"
            ];

            function scrollRailToCurrentStep() {
                const rail = document.getElementById('stepperNav');
                const activeIndicator = document.querySelector(`.step-indicator[data-step="${currentStep}"]`);

                if (!rail || !activeIndicator) {
                    return;
                }

                const railRect = rail.getBoundingClientRect();
                const indicatorRect = activeIndicator.getBoundingClientRect();

                if (indicatorRect.left < railRect.left || indicatorRect.right > railRect.right) {
                    rail.scrollTo({
                        left: activeIndicator.offsetLeft - (rail.clientWidth - activeIndicator.offsetWidth) / 2,
                        behavior: 'smooth'
                    });
                }
            }

            function updateWizardUI() {
                // Hide all step sections
                for (let i = 1; i <= totalSteps; i++) {
                    const sec = document.getElementById(`stepSection${i}`);
                    const badge = document.getElementById(`stepBadge${i}`);
                    const indicator = document.querySelector(`.step-indicator[data-step="${i}"]`);

                    if (sec) {
                        if (i === currentStep) {
                            sec.classList.remove('hidden');
                        } else {
                            sec.classList.add('hidden');
                        }
                    }

                    if (badge && indicator) {
                        if (i < currentStep) {
                            indicator.classList.remove('opacity-60');
                            badge.className =
                                "w-9 h-9 rounded-full bg-secondary-container text-primary flex items-center justify-center font-label-lg text-label-lg";
                            badge.innerHTML = `<span class="material-symbols-outlined text-[18px]">check</span>`;
                        } else if (i === currentStep) {
                            indicator.classList.remove('opacity-60');
                            badge.className =
                                "w-9 h-9 rounded-full bg-primary-container text-on-primary flex items-center justify-center font-label-lg text-label-lg shadow-sm";
                            badge.innerHTML = `<span>${i}</span>`;
                        } else {
                            indicator.classList.add('opacity-60');
                            badge.className =
                                "w-9 h-9 rounded-full bg-surface-container text-on-surface flex items-center justify-center font-label-lg text-label-lg";
                            badge.innerHTML = `<span>${i}</span>`;
                        }
                    }
                }

                // Prev / Next button states
                const prevBtn = document.getElementById('prevBtn');
                const nextBtn = document.getElementById('nextBtn');
                const submitBtn = document.getElementById('submitBtn');
                const nextBtnText = document.getElementById('nextBtnText');

                if (currentStep === 1) {
                    prevBtn.classList.add('hidden');
                } else {
                    prevBtn.classList.remove('hidden');
                }

                if (currentStep === totalSteps) {
                    nextBtn.classList.add('hidden');
                    submitBtn.classList.remove('hidden');
                } else {
                    nextBtn.classList.remove('hidden');
                    submitBtn.classList.add('hidden');
                    nextBtnText.innerText = stepLabels[currentStep - 1] || "Lanjutkan";
                }

                // Update Progress summary
                const pct = Math.round((currentStep / totalSteps) * 100);
                const fill = document.getElementById('progressBarFill');
                const pctLabel = document.getElementById('progressPercentage');
                if (fill) fill.style.width = pct + '%';
                if (pctLabel) pctLabel.innerText = pct + '% Selesai';

                scrollRailToCurrentStep();

                window.scrollTo({
                    top: 120,
                    behavior: 'smooth'
                });
            }

            function nextStep() {
                if (currentStep < totalSteps) {
                    currentStep++;
                    updateWizardUI();
                }
            }

            function prevStep() {
                if (currentStep > 1) {
                    currentStep--;
                    updateWizardUI();
                }
            }

            function switchStep(stepNum) {
                currentStep = stepNum;
                updateWizardUI();
            }

            function submitRegistration() {
                const chk = document.getElementById('declarationCheck');
                if (chk && !chk.checked) {
                    alert("Mohon centang pernyataan kebenaran data & pakta integritas sebelum mengirimkan formulir.");
                    return;
                }
                const modal = document.getElementById('successModal');
                if (modal) {
                    modal.classList.remove('hidden');
                }
            }

            function closeSuccessModal() {
                const modal = document.getElementById('successModal');
                if (modal) {
                    modal.classList.add('hidden');
                }
            }

            document.addEventListener('DOMContentLoaded', function () {
                updateWizardUI();
            });
        </script>
    </main>
</body>

</html>
