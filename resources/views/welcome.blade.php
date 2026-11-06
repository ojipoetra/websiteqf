<!DOCTYPE html>

<html lang="id">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="web_standard" name="shell-type" />
    <link
        href="https://fonts.googleapis.com/css2?family=Epilogue:wght@500;600;700&amp;family=Plus_Jakarta_Sans:wght@400;500;600;700&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
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
</head>

<body class="bg-surface font-body-md text-on-surface antialiased">
    <header
        class="fixed top-0 left-0 right-0 z-50 bg-surface-container-lowest/95 backdrop-blur-xl shadow-[0_1px_8px_rgba(0,0,0,0.04)]">
        <div
            class="h-20 w-full px-gutter-desktop max-w-[1280px] mx-auto flex items-center justify-between gap-space-md">
            <div class="flex items-center gap-space-sm shrink-0"><img alt="logo Ponpes Qothrotul Falah"
                    class="h-8 w-auto object-contain"
                    src="/images.png" />
                <div class="flex flex-col"><span
                        class="font-headline-sm text-headline-sm text-primary leading-none tracking-tight">Ponpes Qothrotul Falah</span><span
                        class="font-label-sm text-label-sm text-outline tracking-wider mt-0.5 uppercase">Unggul,
                        Berkarakter &amp; Berwawasan Global</span></div>
            </div>
            <nav class="hidden xl:flex items-center gap-space-xs"
                data-active-classes="bg-surface-container text-primary font-title-md rounded-lg"><a aria-current="page"
                    class="px-space-sm py-2 transition-all bg-surface-container text-primary font-title-md rounded-lg"
                    data-path="beranda" href="#">Beranda</a><a
                    class="px-space-sm py-2 rounded-lg font-title-md text-title-md text-on-surface-variant hover:bg-surface-container hover:text-on-surface transition-all"
                    data-path="alur-dan-tahapan-ppdb" href="#">Alur</a><a
                    class="px-space-sm py-2 rounded-lg font-title-md text-title-md text-on-surface-variant hover:bg-surface-container hover:text-on-surface transition-all"
                    data-path="formulir-pendaftaran" href="#">Formulir Pendaftaran</a><a
                    class="px-space-sm py-2 rounded-lg font-title-md text-title-md text-on-surface-variant hover:bg-surface-container hover:text-on-surface transition-all"
                    data-path="berita-dan-blog" href="#">Berita</a></nav>
            <div class="flex items-center gap-space-md shrink-0">
                <div
                    class="hidden lg:flex items-center gap-space-xs bg-surface-container-low px-space-sm py-1.5 rounded-full">
                    <span class="material-symbols-outlined text-primary text-[18px]">headset_mic</span>
                    <div class="flex flex-col text-left"><span
                            class="font-label-sm text-label-sm text-on-surface-variant leading-tight">Bantuan
                            PPDB</span><span class="font-label-md text-label-md text-primary leading-tight">(021)
                            7890-1234</span></div>
                </div>
                <a
                    class="bg-primary-container text-on-primary px-space-md py-2.5 rounded-lg font-label-lg text-label-lg shadow-[0_4px_12px_-2px_rgba(21,128,61,0.2)] hover:bg-primary transition-colors flex items-center gap-1.5"
                    data-path="formulir-pendaftaran" href="#"><span>Daftar Sekarang</span><span
                        class="material-symbols-outlined text-[16px]">arrow_forward</span></a>
            </div>
        </div>
    </header>
    <main class="w-full pt-20 bg-surface min-h-[calc(100vh-20rem)]">
        <div class="flex flex-col w-full">
            <!-- SECTION 1: HERO -->
            <section
                class="relative w-full overflow-hidden bg-gradient-to-b from-surface-container-low via-surface to-surface pb-space-xl">
                <!-- Ambient Academic Pattern -->
                <div class="absolute inset-0 pointer-events-none opacity-40">
                    <svg class="w-full h-full" xmlns="http://www.w3.org/2000/svg">
                        <defs>
                            <pattern height="48" id="academic-grid" patternunits="userSpaceOnUse" width="48">
                                <circle cx="2" cy="2" fill="#00652c" opacity="0.12" r="1.5"></circle>
                            </pattern>
                        </defs>
                        <rect fill="url(#academic-grid)" height="100%" width="100%"></rect>
                    </svg>
                </div>
                <!-- Soft Glow Spheres -->
                <div
                    class="absolute top-12 left-1/4 w-96 h-96 rounded-full bg-secondary-container/30 blur-3xl pointer-events-none">
                </div>
                <div
                    class="absolute -top-10 right-10 w-80 h-80 rounded-full bg-tertiary-fixed/40 blur-3xl pointer-events-none">
                </div>
                <div class="relative w-full max-w-[1280px] mx-auto px-gutter-desktop pt-8 md:pt-14">
                    <div class="grid grid-cols-1 lg:grid-cols-12 gap-space-xl items-center">
                        <!-- Text Column -->
                        <div class="lg:col-span-7 flex flex-col gap-space-md z-10">
                            <!-- Institutional Badge -->
                            <div
                                class="inline-flex items-center gap-2 bg-surface-container-lowest px-space-sm py-1.5 rounded-full shadow-sm self-start">
                                <span class="w-2.5 h-2.5 rounded-full bg-primary animate-pulse"></span>
                                <span
                                    class="font-label-sm text-label-sm text-primary tracking-wide uppercase font-semibold">Penerimaan
                                    Peserta Didik Baru (PPDB) TP 2025/2026 Dibuka</span>
                                <span
                                    class="font-label-sm text-label-sm bg-tertiary-fixed text-on-tertiary-fixed px-2 py-0.5 rounded-full font-bold">Gelombang
                                    1</span>
                            </div>
                            <h1
                                class="font-display-hero text-display-hero-mobile md:text-display-hero text-on-background tracking-tight">
                                Bernuansa Islami, <span class="text-secondary">unggul</span> dalam prestasi, menjunjung tinggi tradisi, santun dalam bersikap, <span class="text-secondary">diminati masyarakat</span> dan meraih kemuliaan hidup
                            </h1>
                            <p class="font-body-lg text-body-lg text-on-surface-variant max-w-2xl">Pondok Pesantren Qothrotul Falah selalu konsisten memenuhi harapan masyarakat akan lembaga pendidikan yang berkualitas dan terjangkau biayanya, dan terus menerus berupaya mewujudkan SDM yang berkualitas, berwawasan keagamaan, kebangsaan, kemasyarakatan, sehingga insya Allah akan lahir insan yang beriman, berilmu, berketerampilan dan berakhlakul karimah.
                            </p>
                            <!-- Dual Call to Action Buttons -->
                            <div class="flex flex-wrap items-center gap-space-sm pt-2">
                                <a class="bg-primary text-on-primary hover:bg-secondary px-6 py-3.5 rounded-lg font-label-lg text-label-lg shadow-md hover:shadow-xl transition-all flex items-center gap-2"
                                    data-path="formulirpendaftaran" href="/formulirpendaftaran">
                                    <span>Daftar Siswa Baru Sekarang</span>
                                    <span class="material-symbols-outlined text-[18px]">how_to_reg</span>
                                </a>
                                <a class="bg-surface-container-lowest text-primary hover:bg-surface-container-high px-6 py-3.5 rounded-lg font-label-lg text-label-lg shadow-sm transition-all flex items-center gap-2"
                                    data-path="alur-dan-tahapan-ppdb" href="#">
                                    <span>Lihat Alur Pendaftaran</span>
                                    <span class="material-symbols-outlined text-[18px]">timeline</span>
                                </a>
                            </div>
                            <!-- Trust Subtext -->
                            <div
                                class="flex items-center gap-3 pt-1 text-on-surface-variant font-label-md text-label-md">
                                <span class="material-symbols-outlined text-primary text-[20px]">verified_user</span>
                                <span>Surat Keputusan Akreditasi BAN-S/M No. 1347/BAN-SM/SK/2023 • Sertifikasi Cambridge
                                    Pathway</span>
                            </div>
                        </div>
                        <!-- Hero Visual Bento / Collage -->
                        <div class="lg:col-span-5 relative">
                            <div
                                class="relative w-full aspect-[4/5] rounded-xl overflow-hidden shadow-xl bg-surface-container-lowest">
                                <img class="w-full h-full object-cover"
                                    data-alt="Indonesian high school students in modern smart green and white school uniform collaborating in an advanced science laboratory with microscopes and digital tablets, sunlit botanical campus view outside through large glass windows, clean institutional prestige lighting"
                                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuCrPL-0JgAkXu4ai7wWmrpwV3yJGFq-Y2FJ_zhZjoFYtxCoFoO1CZuGCT8q_MKHIhk2CZAzbsTkhzxkcncRf1vU0wAr5QwZY-zJ8PMPDqMdVIFzpH6KcjIk3iRd4w6uu8R2LBWvzRLNrd6Zj7uVdBj01zI8o9X3lF8wzPeN_hRAZniwtMWCh3pDJi4Vt_IquazHNMwO7MXLOvEaE73IctwNt6GHE_7pjBJL1CxlJVM" />
                                <div
                                    class="absolute inset-0 bg-gradient-to-t from-on-background/80 via-transparent to-transparent">
                                </div>
                                <!-- In-card Floating Accreditation Crest Banner -->
                                <div
                                    class="absolute top-4 right-4 bg-surface-container-lowest/95 backdrop-blur-md p-3 rounded-lg shadow-lg flex items-center gap-3">
                                    <div
                                        class="w-10 h-10 rounded-full bg-secondary-container text-on-secondary-container flex items-center justify-center font-bold">
                                        <span class="material-symbols-outlined text-[24px]">school</span>
                                    </div>
                                    <div class="flex flex-col">
                                        <span
                                            class="font-label-sm text-label-sm uppercase tracking-wider text-outline">Kategori</span>
                                        <span class="font-title-md text-title-md text-primary font-bold">SMA Rujukan
                                            Nasional</span>
                                    </div>
                                </div>
                                <!-- In-card Student Achievement Tag -->
                                <div
                                    class="absolute bottom-5 left-5 right-5 bg-surface-container-lowest/95 backdrop-blur-md p-4 rounded-xl shadow-lg flex items-center justify-between">
                                    <div class="flex items-center gap-3">
                                        <div
                                            class="w-11 h-11 rounded-lg bg-primary-fixed flex items-center justify-center text-on-primary-fixed-variant">
                                            <span
                                                class="material-symbols-outlined text-[26px]">workspace_premium</span>
                                        </div>
                                        <div class="flex flex-col">
                                            <span
                                                class="font-title-md text-title-md text-on-surface font-semibold">120+
                                                Medali Olimpiade</span>
                                            <span class="font-body-sm text-body-sm text-on-surface-variant">OSN, IMSO,
                                                &amp; Debat Bahasa Inggris 2024</span>
                                        </div>
                                    </div>
                                    <span class="material-symbols-outlined text-primary text-[22px]">trending_up</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Quick Stats Mosaic Ribbon -->
                    <div
                        class="mt-space-xl grid grid-cols-2 md:grid-cols-4 gap-space-sm bg-surface-container-lowest p-space-md rounded-xl shadow-sm">
                        <div
                            class="flex flex-col p-space-sm rounded-lg hover:bg-surface-container-low transition-colors">
                            <span
                                class="font-headline-lg text-headline-lg text-primary tracking-tight font-bold">98%</span>
                            <span class="font-title-md text-title-md text-on-surface font-semibold">Lulus PTN &amp;
                                Luar Negeri</span>
                            <span class="font-body-sm text-body-sm text-on-surface-variant">UI, ITB, UGM, NUS, Kyoto
                                Univ</span>
                        </div>
                        <div
                            class="flex flex-col p-space-sm rounded-lg hover:bg-surface-container-low transition-colors">
                            <span
                                class="font-headline-lg text-headline-lg text-secondary tracking-tight font-bold">A</span>
                            <span class="font-title-md text-title-md text-on-surface font-semibold">Akreditasi
                                Unggul</span>
                            <span class="font-body-sm text-body-sm text-on-surface-variant">Nilai Evaluasi 98.7/100
                                BAN-S/M</span>
                        </div>
                        <div
                            class="flex flex-col p-space-sm rounded-lg hover:bg-surface-container-low transition-colors">
                            <span
                                class="font-headline-lg text-headline-lg text-tertiary-container tracking-tight font-bold">35+</span>
                            <span class="font-title-md text-title-md text-on-surface font-semibold">Ekstrakurikuler
                                Aktif</span>
                            <span class="font-body-sm text-body-sm text-on-surface-variant">Sains, Robotika, Seni,
                                &amp; Olahraga</span>
                        </div>
                        <div
                            class="flex flex-col p-space-sm rounded-lg hover:bg-surface-container-low transition-colors">
                            <span
                                class="font-headline-lg text-headline-lg text-primary tracking-tight font-bold">1:12</span>
                            <span class="font-title-md text-title-md text-on-surface font-semibold">Rasio Guru &amp;
                                Siswa</span>
                            <span class="font-body-sm text-body-sm text-on-surface-variant">Pendampingan personal &amp;
                                terarah</span>
                        </div>
                    </div>
                </div>
            </section>
            <!-- SECTION 2: SAMBUTAN KEPALA SEKOLAH -->
            
            <!-- SECTION 3: KEUNGGULAN & PROGRAM PENDIDIKAN -->
            <section class="w-full py-space-xl bg-surface-container-low">
                <div class="w-full max-w-[1280px] mx-auto px-gutter-desktop">
                    <div class="flex flex-col md:flex-row md:items-end justify-between gap-space-md mb-space-lg">
                        <div class="flex flex-col gap-2">
                            <span
                                class="font-label-md text-label-md text-primary font-bold uppercase tracking-wider">Ekosistem
                                Pendidikan Paripurna</span>
                            <h2
                                class="font-headline-lg text-headline-lg-mobile md:text-headline-lg text-on-background font-bold tracking-tight">
                                Keunggulan Akademik &amp; Karakter
                            </h2>
                            <p class="font-body-md text-body-md text-on-surface-variant max-w-xl">
                                Empat pilar keunggulan kurikulum dan fasilitas yang dirancang khusus untuk memastikan
                                kesiapan peserta didik memasuki perguruan tinggi kelas dunia.
                            </p>
                        </div>
                        <a class="self-start md:self-auto font-label-lg text-label-lg text-primary hover:text-secondary flex items-center gap-1 font-semibold transition-colors"
                            data-path="alur-dan-tahapan-ppdb" href="#">
                            <span>Pelajari Seluruh Kurikulum</span>
                            <span class="material-symbols-outlined text-[18px]">east</span>
                        </a>
                    </div>
                    <!-- 4 Program Feature Cards -->
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-space-md">
                        <!-- Card 1 -->
                        <div
                            class="bg-surface-container-lowest p-space-lg rounded-xl shadow-sm hover:shadow-xl transition-all flex flex-col justify-between group">
                            <div class="flex flex-col">
                                <div
                                    class="w-14 h-14 rounded-xl bg-secondary-container text-on-secondary-container flex items-center justify-center mb-space-md group-hover:scale-110 transition-transform">
                                    <span class="material-symbols-outlined text-[30px]">public</span>
                                </div>
                                <span
                                    class="font-label-sm text-label-sm text-primary font-bold uppercase tracking-wider mb-1">Kurikulum
                                    Terintegrasi</span>
                                <h3 class="font-headline-sm text-headline-sm text-on-surface font-bold mb-2">Kurikulum
                                    Nasional &amp; Internasional</h3>
                                <p class="font-body-sm text-body-sm text-on-surface-variant">
                                    Sinergi Kurikulum Merdeka Nasional dengan muatan Cambridge IGCSE / A-Level dan
                                    persiapan intensif UTBK SNBT sejak kelas X.
                                </p>
                            </div>
                            <div
                                class="mt-space-md pt-space-sm flex items-center justify-between text-outline font-label-sm text-label-sm">
                                <span>Bilingual Mandatori</span>
                                <span class="material-symbols-outlined text-[18px] text-primary">translate</span>
                            </div>
                        </div>
                        <!-- Card 2 -->
                        <div
                            class="bg-surface-container-lowest p-space-lg rounded-xl shadow-sm hover:shadow-xl transition-all flex flex-col justify-between group">
                            <div class="flex flex-col">
                                <div
                                    class="w-14 h-14 rounded-xl bg-primary-fixed text-on-primary-fixed-variant flex items-center justify-center mb-space-md group-hover:scale-110 transition-transform">
                                    <span class="material-symbols-outlined text-[30px]">smart_toy</span>
                                </div>
                                <span
                                    class="font-label-sm text-label-sm text-primary font-bold uppercase tracking-wider mb-1">Fasilitas
                                    Riset 4.0</span>
                                <h3 class="font-headline-sm text-headline-sm text-on-surface font-bold mb-2">
                                    Laboratorium STEAM &amp; Robotika</h3>
                                <p class="font-body-sm text-body-sm text-on-surface-variant">
                                    Inkubator sains modern dilengkapi 3D Printing, Microcontroller Suite, kecerdasan
                                    buatan, dan laboratorium biosains berstandar biosafety level 2.
                                </p>
                            </div>
                            <div
                                class="mt-space-md pt-space-sm flex items-center justify-between text-outline font-label-sm text-label-sm">
                                <span>12 Proyek/Tahun</span>
                                <span
                                    class="material-symbols-outlined text-[18px] text-primary">precision_manufacturing</span>
                            </div>
                        </div>
                        <!-- Card 3 -->
                        <div
                            class="bg-surface-container-lowest p-space-lg rounded-xl shadow-sm hover:shadow-xl transition-all flex flex-col justify-between group">
                            <div class="flex flex-col">
                                <div
                                    class="w-14 h-14 rounded-xl bg-tertiary-fixed text-on-tertiary-fixed flex items-center justify-center mb-space-md group-hover:scale-110 transition-transform">
                                    <span class="material-symbols-outlined text-[30px]">diversity_3</span>
                                </div>
                                <span
                                    class="font-label-sm text-label-sm text-tertiary font-bold uppercase tracking-wider mb-1">Penguatan
                                    Budi Pekerti</span>
                                <h3 class="font-headline-sm text-headline-sm text-on-surface font-bold mb-2">Pembinaan
                                    Karakter &amp; Kepemimpinan</h3>
                                <p class="font-body-sm text-body-sm text-on-surface-variant">
                                    Program Student Leadership Summit, pengabdian masyarakat desa binaan, serta asuhan
                                    konseling psikologi klinis berkala.
                                </p>
                            </div>
                            <div
                                class="mt-space-md pt-space-sm flex items-center justify-between text-outline font-label-sm text-label-sm">
                                <span>Mentoring 1-on-1</span>
                                <span class="material-symbols-outlined text-[18px] text-tertiary">psychology</span>
                            </div>
                        </div>
                        <!-- Card 4 -->
                        <div
                            class="bg-surface-container-lowest p-space-lg rounded-xl shadow-sm hover:shadow-xl transition-all flex flex-col justify-between group">
                            <div class="flex flex-col">
                                <div
                                    class="w-14 h-14 rounded-xl bg-secondary-container text-on-secondary-container flex items-center justify-center mb-space-md group-hover:scale-110 transition-transform">
                                    <span class="material-symbols-outlined text-[30px]">stars</span>
                                </div>
                                <span
                                    class="font-label-sm text-label-sm text-secondary font-bold uppercase tracking-wider mb-1">Apresiasi
                                    Talenta</span>
                                <h3 class="font-headline-sm text-headline-sm text-on-surface font-bold mb-2">Beasiswa
                                    Prestasi &amp; Tahfidz</h3>
                                <p class="font-body-sm text-body-sm text-on-surface-variant">
                                    Keringanan SPP hingga 100% penuh untuk juara kompetisi sains, olahraga, seni
                                    nasional, serta program tahfidz minimal 5 juz.
                                </p>
                            </div>
                            <div
                                class="mt-space-md pt-space-sm flex items-center justify-between text-outline font-label-sm text-label-sm">
                                <span>Kuota 50 Siswa</span>
                                <span class="material-symbols-outlined text-[18px] text-secondary">card_giftcard</span>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- SECTION 4: RINGKASAN ALUR CEPAT PPDB (4 STEPS ROADMAP) -->
            <section class="w-full py-space-xl bg-surface">
                <div class="w-full max-w-[1280px] mx-auto px-gutter-desktop">
                    <div class="text-center max-w-2xl mx-auto mb-space-xl flex flex-col gap-2">
                        <span
                            class="font-label-md text-label-md text-primary font-bold uppercase tracking-wider">Langkah
                            Pendaftaran Terstruktur</span>
                        <h2
                            class="font-headline-lg text-headline-lg-mobile md:text-headline-lg text-on-background font-bold tracking-tight">
                            Ringkasan Alur Seleksi PPDB 2025
                        </h2>
                        <p class="font-body-md text-body-md text-on-surface-variant">
                            Empat tahapan terpadu yang transparan, mudah diakses melalui sistem admisi digital SMA
                            Lentera Nusantara.
                        </p>
                    </div>
                    <!-- Stepper Roadmap Cards -->
                    <div class="grid grid-cols-1 md:grid-cols-4 gap-space-md relative">
                        <!-- Step 1 -->
                        <div
                            class="relative bg-surface-container-lowest p-space-md rounded-xl shadow-sm hover:shadow-md transition-shadow flex flex-col">
                            <div class="flex items-center justify-between mb-3">
                                <span
                                    class="w-9 h-9 rounded-full bg-primary text-on-primary font-bold flex items-center justify-center text-label-lg">01</span>
                                <span
                                    class="font-label-sm text-label-sm text-primary bg-secondary-container px-2.5 py-0.5 rounded-full font-bold">Online</span>
                            </div>
                            <h4 class="font-title-lg text-title-lg text-on-surface font-bold mb-1">Buat Akun &amp;
                                Registrasi</h4>
                            <p class="font-body-sm text-body-sm text-on-surface-variant mb-4">
                                Mengisi biodata awal calon siswa, memilih jalur (Reguler/Prestasi), dan mendapatkan ID
                                Pendaftaran resmi.
                            </p>
                            <div
                                class="mt-auto flex items-center gap-1.5 text-on-surface font-label-sm text-label-sm pt-2">
                                <span class="material-symbols-outlined text-primary text-[18px]">badge</span>
                                <span>Waktu: 5-10 Menit</span>
                            </div>
                        </div>
                        <!-- Step 2 -->
                        <div
                            class="relative bg-surface-container-lowest p-space-md rounded-xl shadow-sm hover:shadow-md transition-shadow flex flex-col">
                            <div class="flex items-center justify-between mb-3">
                                <span
                                    class="w-9 h-9 rounded-full bg-primary text-on-primary font-bold flex items-center justify-center text-label-lg">02</span>
                                <span
                                    class="font-label-sm text-label-sm text-on-surface-variant bg-surface-container-high px-2.5 py-0.5 rounded-full font-bold">Unggah</span>
                            </div>
                            <h4 class="font-title-lg text-title-lg text-on-surface font-bold mb-1">Pengisian Berkas
                            </h4>
                            <p class="font-body-sm text-body-sm text-on-surface-variant mb-4">
                                Upload rapor SMP semester 1-5, kartu keluarga, akta kelahiran, dan sertifikat prestasi
                                (opsional jalur beasiswa).
                            </p>
                            <div
                                class="mt-auto flex items-center gap-1.5 text-on-surface font-label-sm text-label-sm pt-2">
                                <span class="material-symbols-outlined text-primary text-[18px]">upload_file</span>
                                <span>Verifikasi 1x24 Jam</span>
                            </div>
                        </div>
                        <!-- Step 3 -->
                        <div
                            class="relative bg-surface-container-lowest p-space-md rounded-xl shadow-sm hover:shadow-md transition-shadow flex flex-col">
                            <div class="flex items-center justify-between mb-3">
                                <span
                                    class="w-9 h-9 rounded-full bg-primary text-on-primary font-bold flex items-center justify-center text-label-lg">03</span>
                                <span
                                    class="font-label-sm text-label-sm text-tertiary-container bg-tertiary-fixed px-2.5 py-0.5 rounded-full font-bold">Asesmen</span>
                            </div>
                            <h4 class="font-title-lg text-title-lg text-on-surface font-bold mb-1">Penelusuran Bakat
                                &amp; CBT</h4>
                            <p class="font-body-sm text-body-sm text-on-surface-variant mb-4">
                                Asesmen diagnostik potensi akademik, pemetaan minat karier, dan wawancara kepribadian
                                bersama psikolog sekolah.
                            </p>
                            <div
                                class="mt-auto flex items-center gap-1.5 text-on-surface font-label-sm text-label-sm pt-2">
                                <span class="material-symbols-outlined text-tertiary-container text-[18px]">quiz</span>
                                <span>Online / Onsite</span>
                            </div>
                        </div>
                        <!-- Step 4 -->
                        <div
                            class="relative bg-surface-container-lowest p-space-md rounded-xl shadow-sm hover:shadow-md transition-shadow flex flex-col">
                            <div class="flex items-center justify-between mb-3">
                                <span
                                    class="w-9 h-9 rounded-full bg-primary-container text-on-primary font-bold flex items-center justify-center text-label-lg">04</span>
                                <span
                                    class="font-label-sm text-label-sm text-primary bg-secondary-container px-2.5 py-0.5 rounded-full font-bold">Final</span>
                            </div>
                            <h4 class="font-title-lg text-title-lg text-on-surface font-bold mb-1">Pengumuman &amp;
                                Daftar Ulang</h4>
                            <p class="font-body-sm text-body-sm text-on-surface-variant mb-4">
                                Pengecekan hasil seleksi via portal, konfirmasi penerimaan, dan orientasi pengenalan
                                kampus (MPLS Lentera).
                            </p>
                            <div
                                class="mt-auto flex items-center gap-1.5 text-on-surface font-label-sm text-label-sm pt-2">
                                <span class="material-symbols-outlined text-primary text-[18px]">verified</span>
                                <span>SK Resmi Kepala Sekolah</span>
                            </div>
                        </div>
                    </div>
                    <!-- Quick Timeline Footnote Card -->
                    <div
                        class="mt-space-lg bg-surface-container p-space-md rounded-xl flex flex-col md:flex-row items-center justify-between gap-space-md">
                        <div class="flex items-center gap-3">
                            <div
                                class="w-10 h-10 rounded-full bg-primary text-on-primary flex items-center justify-center shrink-0">
                                <span class="material-symbols-outlined text-[20px]">calendar_month</span>
                            </div>
                            <div>
                                <h5 class="font-title-md text-title-md text-on-surface font-bold">Jadwal Gelombang 1
                                    Berlangsung:</h5>
                                <p class="font-body-sm text-body-sm text-on-surface-variant">Pendaftaran dibuka hingga
                                    28 Februari 2025. Kuota tersisa: 42 kursi dari 180 daya tampung.</p>
                            </div>
                        </div>
                        <a class="bg-primary text-on-primary hover:bg-secondary px-5 py-2.5 rounded-lg font-label-md text-label-md font-semibold transition-colors shrink-0"
                            data-path="alur-dan-tahapan-ppdb" href="#">
                            Rincian Jadwal Lengkap
                        </a>
                    </div>
                </div>
            </section>
            <!-- SECTION 5: CUPLIKAN BERITA & PRESTASI TERBARU -->
            <section class="w-full py-space-xl bg-surface-container-low">
                <div class="w-full max-w-[1280px] mx-auto px-gutter-desktop">
                    <div class="flex flex-col md:flex-row md:items-end justify-between gap-space-md mb-space-lg">
                        <div class="flex flex-col gap-2">
                            <span
                                class="font-label-md text-label-md text-primary font-bold uppercase tracking-wider">Kabar
                                Komunitas &amp; Prestasi</span>
                            <h2
                                class="font-headline-lg text-headline-lg-mobile md:text-headline-lg text-on-background font-bold tracking-tight">
                                Prestasi &amp; Berita Terkini
                            </h2>
                            <p class="font-body-md text-body-md text-on-surface-variant max-w-xl">
                                Sorotan capaian mutakhir para siswa dan agenda penting civitas akademika SMA Lentera
                                Nusantara.
                            </p>
                        </div>
                        <a class="self-start md:self-auto font-label-lg text-label-lg text-primary hover:text-secondary flex items-center gap-1 font-semibold transition-colors"
                            data-path="berita-dan-blog" href="#">
                            <span>Lihat Semua Berita</span>
                            <span class="material-symbols-outlined text-[18px]">arrow_outward</span>
                        </a>
                    </div>
                    <!-- 3 Preview Cards -->
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-space-md">
                        <!-- News Card 1 -->
                        <article
                            class="bg-surface-container-lowest rounded-xl overflow-hidden shadow-sm hover:shadow-xl transition-all flex flex-col group">
                            <div class="relative aspect-video w-full overflow-hidden">
                                <img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300"
                                    data-alt="Indonesian high school students holding golden championship trophy on stage with confetti in International Robot Olympiad Singapore, wearing smart green school jackets, broad smiles and proud national pride celebration"
                                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuBt1URMVw-_q6fRJ8wg-RH0Rb2MdSMqNfum9xrbITlXLpgEAJffH7ta7orKfJIUlJ3sk4PnyCGZyOXKmqfGnEAObk366M3yg60u7O8qmPAvmv5sUDKO0wBAMts32MY9C60qj4u_AHJ1TnO9blkb4Fk0udGwjpXLwEUbZJL7CWgBNTQE8_MrJkt0l7UJ1DJNTA7Pbu52tkg7KJaqFKgQ6-UqjwNdQ_MYSkuayBjwjME" />
                                <span
                                    class="absolute top-3 left-3 bg-primary text-on-primary px-2.5 py-1 rounded-full font-label-sm text-label-sm font-bold uppercase">
                                    Prestasi Internasional
                                </span>
                            </div>
                            <div class="p-space-md flex flex-col flex-1">
                                <span class="font-label-sm text-label-sm text-outline mb-1">14 Januari 2025 • Tim
                                    Robotika Lentera</span>
                                <h3
                                    class="font-headline-sm text-headline-sm text-on-surface font-bold mb-2 group-hover:text-primary transition-colors">
                                    Raih Juara 1 International Robot Olympiad 2025 di Singapura
                                </h3>
                                <p class="font-body-sm text-body-sm text-on-surface-variant line-clamp-3 mb-4">
                                    Tim riset SMA Lentera Nusantara berhasil mengungguli 48 negara melalui inovasi robot
                                    pemantau kelestarian hutan bakau berbasis sensor AI otonom.
                                </p>
                                <div
                                    class="mt-auto pt-2 flex items-center justify-between text-primary font-label-md text-label-md font-semibold">
                                    <span>Baca Selengkapnya</span>
                                    <span class="material-symbols-outlined text-[18px]">chevron_right</span>
                                </div>
                            </div>
                        </article>
                        <!-- News Card 2 -->
                        <article
                            class="bg-surface-container-lowest rounded-xl overflow-hidden shadow-sm hover:shadow-xl transition-all flex flex-col group">
                            <div class="relative aspect-video w-full overflow-hidden">
                                <img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300"
                                    data-alt="University preparation fair hall inside prestigious school auditorium with university university booths from UI ITB NTU Melbourne, high school students and parents discussing academic pathways with campus counselors, warm professional education expo lighting"
                                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuASl-mPzPzPPS9WCsr-BVhiSWnVEuYbggYH-UzqvlxTjkfhgy11YvGhskCtzzGRiNOD25k2czqKJ-RtjZdpnugmWAf9XBcnRE7M2FGdCSE3RemRF4c_TzZNH6FgLp6yMo4MZho1abt8tIIk5P9ORdLirnuKO1o0GSbWWXFxSm-ykOLBJeTRLOJp7K2MbPJU25Sum77VXXvtwQSgHsoDVzsFjVDvcXvlJzC4hMtIwNI" />
                                <span
                                    class="absolute top-3 left-3 bg-secondary text-on-secondary px-2.5 py-1 rounded-full font-label-sm text-label-sm font-bold uppercase">
                                    Akademik &amp; Karier
                                </span>
                            </div>
                            <div class="p-space-md flex flex-col flex-1">
                                <span class="font-label-sm text-label-sm text-outline mb-1">08 Januari 2025 • Bimbingan
                                    Konseling</span>
                                <h3
                                    class="font-headline-sm text-headline-sm text-on-surface font-bold mb-2 group-hover:text-primary transition-colors">
                                    Pameran Pendidikan Lentera EduExpo 2025: Hadirkan 30 Universitas Top Dunia
                                </h3>
                                <p class="font-body-sm text-body-sm text-on-surface-variant line-clamp-3 mb-4">
                                    Memberikan wawasan langsung mengenai beasiswa luar negeri, strategi tes potensi
                                    skolastik UTBK, dan peluang magang riset sejak dini.
                                </p>
                                <div
                                    class="mt-auto pt-2 flex items-center justify-between text-primary font-label-md text-label-md font-semibold">
                                    <span>Baca Selengkapnya</span>
                                    <span class="material-symbols-outlined text-[18px]">chevron_right</span>
                                </div>
                            </div>
                        </article>
                        <!-- News Card 3 -->
                        <article
                            class="bg-surface-container-lowest rounded-xl overflow-hidden shadow-sm hover:shadow-xl transition-all flex flex-col group">
                            <div class="relative aspect-video w-full overflow-hidden">
                                <img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300"
                                    data-alt="Indonesian high school student council giving food supplies and books to rural community village children, cheerful interaction, green nature background, clean documentary humanitarian photo style"
                                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuBk7VCcrq2rtZeA3ScZ5Y7To8JS2q8f1JlKpGmoQWGhZ8qNnyDsNU68eopqgm0cvksYjrW0X8QMQoBQrOaivJEoykvk0ZbGU-hE0kU9lGFJ4wf_lrSrNBqdvxLGF-0g0oUD1jXqCjhZ8zYoIbbkkm7ZqVTcnOBK4Cf4BMb_3UZk_CZKfbiREDyTCXdg9HxKrBV_66CeK64ZhKxUZu7u3OjA0oMeWSYcOJTHF7pcM7c" />
                                <span
                                    class="absolute top-3 left-3 bg-tertiary-container text-on-tertiary px-2.5 py-1 rounded-full font-label-sm text-label-sm font-bold uppercase">
                                    Pengabdian Sosial
                                </span>
                            </div>
                            <div class="p-space-md flex flex-col flex-1">
                                <span class="font-label-sm text-label-sm text-outline mb-1">29 Desember 2024 • OSIS
                                    &amp; MPK</span>
                                <h3
                                    class="font-headline-sm text-headline-sm text-on-surface font-bold mb-2 group-hover:text-primary transition-colors">
                                    Lentera Berbagi: Bakti Sosial &amp; Edukasi Literasi Digital Desa Ciburial
                                </h3>
                                <p class="font-body-sm text-body-sm text-on-surface-variant line-clamp-3 mb-4">
                                    Siswa kelas XI menyalurkan 2.000 buku pelajaran serta menggelar lokakarya internet
                                    sehat dan pemanfaatan perpustakaan pintar di Jawa Barat.
                                </p>
                                <div
                                    class="mt-auto pt-2 flex items-center justify-between text-primary font-label-md text-label-md font-semibold">
                                    <span>Baca Selengkapnya</span>
                                    <span class="material-symbols-outlined text-[18px]">chevron_right</span>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
            </section>
            <!-- SECTION 6: CTA BANNER PENDAFTARAN & HOTLINE PPDB -->
            <section class="w-full py-space-xl bg-surface">
                <div class="w-full max-w-[1280px] mx-auto px-gutter-desktop">
                    <div
                        class="relative rounded-2xl bg-gradient-to-br from-primary to-secondary p-space-lg md:p-space-xl overflow-hidden shadow-xl text-on-primary">
                        <!-- Academic Decorative Watermark Crest -->
                        <div class="absolute -right-16 -bottom-16 w-80 h-80 opacity-10 pointer-events-none">
                            <svg class="w-full h-full text-surface-container-lowest" fill="currentColor"
                                viewbox="0 0 200 200">
                                <path
                                    d="M100 20 L160 50 L160 110 C160 150 100 180 100 180 C100 180 40 150 40 110 L40 50 Z">
                                </path>
                            </svg>
                        </div>
                        <div class="relative z-10 grid grid-cols-1 lg:grid-cols-12 gap-space-lg items-center">
                            <div class="lg:col-span-8 flex flex-col gap-space-sm">
                                <div
                                    class="inline-flex items-center gap-2 bg-surface-container-lowest/20 backdrop-blur-md px-3 py-1 rounded-full self-start font-label-sm text-label-sm text-on-primary uppercase font-bold tracking-wider">
                                    <span class="material-symbols-outlined text-[16px]">school</span>
                                    Tahun Pelajaran 2025/2026
                                </div>
                                <h2
                                    class="font-headline-lg text-headline-lg-mobile md:text-headline-lg text-on-primary font-bold tracking-tight">
                                    Siap Menjadi Bagian dari Keluarga Besar SMA Lentera Nusantara?
                                </h2>
                                <p class="font-body-lg text-body-lg text-on-primary/90 max-w-2xl">
                                    Temukan potensi terbaik dalam diri Anda. Daftarkan diri sekarang atau konsultasikan
                                    kebutuhan peminatan putra-putri Anda langsung dengan tim konselor admisi kami.
                                </p>
                                <!-- Dual Fast Action Group -->
                                <div class="flex flex-wrap items-center gap-space-sm pt-3">
                                    <a class="bg-surface-container-lowest text-primary hover:bg-surface-container-low px-6 py-3.5 rounded-lg font-label-lg text-label-lg font-bold shadow-md transition-all flex items-center gap-2"
                                        data-path="formulir-pendaftaran" href="/formulirpendaftaran/create">
                                        <span>Daftar Siswa Baru Sekarang</span>
                                        <span class="material-symbols-outlined text-[18px]">send</span>
                                    </a>
                                    <a class="bg-secondary-container text-on-secondary-container hover:bg-secondary-fixed px-6 py-3.5 rounded-lg font-label-lg text-label-lg font-bold transition-all flex items-center gap-2"
                                        href="https://wa.me/6281234567890" rel="noopener noreferrer" target="_blank">
                                        <span class="material-symbols-outlined text-[18px]">chat</span>
                                        <span>Konsultasi WhatsApp Admisi</span>
                                    </a>
                                </div>
                            </div>
                            <!-- Brochure & Quick Info Badge -->
                            <div
                                class="lg:col-span-4 flex flex-col gap-space-sm bg-surface-container-lowest/15 backdrop-blur-md p-space-md rounded-xl text-on-primary">
                                <div class="flex items-center gap-3">
                                    <span
                                        class="material-symbols-outlined text-[32px] text-tertiary-fixed">menu_book</span>
                                    <div class="flex flex-col">
                                        <span class="font-title-md text-title-md font-bold text-on-primary">Buku
                                            Panduan &amp; Biaya</span>
                                        <span class="font-body-sm text-body-sm text-on-primary/80">Prospektus PPDB
                                            Resmi TP 2025/2026</span>
                                    </div>
                                </div>
                                <p class="font-body-sm text-body-sm text-on-primary/90">
                                    Unduh rincian kurikulum, biaya SPP, fasilitas asrama, dan skema beasiswa dalam
                                    format dokumen PDF resmi.
                                </p>
                                <button
                                    class="w-full bg-surface-container-lowest text-primary hover:bg-surface-container-high py-2.5 rounded-lg font-label-md text-label-md font-bold transition-colors flex items-center justify-center gap-2"
                                    type="button">
                                    <span class="material-symbols-outlined text-[18px]">download</span>
                                    <span>Unduh Brosur (PDF, 4.2 MB)</span>
                                </button>
                                <div class="flex items-center justify-between text-xs text-on-primary/75 pt-1">
                                    <span>Layanan Hotline: 08.00 - 16.00 WIB</span>
                                    <span>(021) 7890-1234</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Interactive script for client-side feedback -->
            <script>
                document.addEventListener('DOMContentLoaded', () => {
                    // Smooth hover effects and anchor routing listeners if needed
                    const downloadBtn = document.querySelector('button[type="button"]');
                    if (downloadBtn) {
                        downloadBtn.addEventListener('click', () => {
                            alert('Brosur Panduan PPDB 2025/2026 SMA Lentera Nusantara berhasil diunduh.');
                        });
                    }
                });
            </script>
        </div>
    </main>
    <footer class="w-full bg-surface-container-lowest shadow-[0_-1px_8px_rgba(0,0,0,0.03)] pt-space-xl pb-space-lg">
        <div class="w-full max-w-[1280px] mx-auto px-gutter-desktop">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-12 gap-space-xl pb-space-xl">
                <div class="lg:col-span-4 flex flex-col gap-space-sm">
                    <div class="flex items-center gap-space-sm"><img alt="Lentera Nusantara Academy Logo"
                            class="h-8 w-auto object-contain"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuDLWXMptoml_Tvl36bDsX1yJo4Q41vVw57AlrOn0f2vFYk5ic58UpLSC6ntWjjZqZxqHx2-qI54GpOOmIISbWIcWd_2x9w-9G5yReSvknLfNqhQioi_ZW3BbAMGVcx1SXY9DPZLHWv8JljHal7hGQc65a8k5hZ-wwXcwjoNy9-3VFNbMXHeBduAwvDROL9pQyoTbKd1FG3zrJYmy6mY20Vgu1sBWn5bMFi-C8cLzQw" />
                        <div class="flex flex-col"><span
                                class="font-headline-sm text-headline-sm text-primary leading-none">SMA Lentera
                                Nusantara</span><span
                                class="font-label-sm text-label-sm text-outline mt-0.5 uppercase">Unggul • Berkarakter
                                • Global</span></div>
                    </div>
                    <p class="font-body-md text-body-md text-on-surface-variant max-w-sm mt-2">Membangun generasi
                        pemimpin berintegritas tinggi dengan standar pendidikan holistik bertaraf internasional dan
                        kurikulum berbasis karakter unggul.</p>
                    <div class="flex items-center gap-space-xs mt-2"><span
                            class="inline-flex items-center gap-1.5 px-space-sm py-1 rounded-full bg-secondary-container text-on-secondary-container font-label-sm text-label-sm"><span
                                class="material-symbols-outlined text-[16px]">verified</span>Terakreditasi A (Unggul)
                            BAN-S/M</span><span
                            class="inline-flex items-center gap-1.5 px-space-sm py-1 rounded-full bg-tertiary-fixed text-on-tertiary-fixed font-label-sm text-label-sm"><span
                                class="material-symbols-outlined text-[16px]">military_tech</span>ISO 9001:2015</span>
                    </div>
                </div>
                <div class="lg:col-span-3 flex flex-col gap-space-sm"><span
                        class="font-title-lg text-title-lg text-on-surface">Navigasi Cepat</span>
                    <div class="flex flex-col gap-space-xs font-body-md text-body-md text-on-surface-variant"><a
                            class="hover:text-primary transition-colors flex items-center gap-2" data-path="beranda"
                            href="#"><span
                                class="material-symbols-outlined text-[16px] text-outline">chevron_right</span>Beranda
                            Utama</a><a class="hover:text-primary transition-colors flex items-center gap-2"
                            data-path="alur-dan-tahapan-ppdb" href="#"><span
                                class="material-symbols-outlined text-[16px] text-outline">chevron_right</span>Alur
                            &amp; Jadwal Seleksi</a><a
                            class="hover:text-primary transition-colors flex items-center gap-2"
                            data-path="formulir-pendaftaran" href="#"><span
                                class="material-symbols-outlined text-[16px] text-outline">chevron_right</span>Registrasi
                            Siswa Baru</a><a class="hover:text-primary transition-colors flex items-center gap-2"
                            data-path="berita-dan-blog" href="#"><span
                                class="material-symbols-outlined text-[16px] text-outline">chevron_right</span>Kabar
                            &amp; Prestasi Akademik</a></div>
                </div>
                <div class="lg:col-span-3 flex flex-col gap-space-sm"><span
                        class="font-title-lg text-title-lg text-on-surface">Sekretariat &amp; Kampus</span>
                    <div class="flex flex-col gap-space-xs font-body-md text-body-md text-on-surface-variant">
                        <p class="flex items-start gap-2"><span
                                class="material-symbols-outlined text-[18px] text-primary shrink-0 mt-0.5">location_on</span>Jl.
                            Nusantara Cendekia No. 88, Jagakarsa, Jakarta Selatan 12620</p>
                        <p class="flex items-center gap-2"><span
                                class="material-symbols-outlined text-[18px] text-primary shrink-0">call</span>(021)
                            7890-1234 / 7890-5678</p>
                        <p class="flex items-center gap-2"><span
                                class="material-symbols-outlined text-[18px] text-primary shrink-0">mail</span>ppdb@smanlenteranusantara.sch.id
                        </p>
                        <p class="flex items-center gap-2"><span
                                class="material-symbols-outlined text-[18px] text-primary shrink-0">schedule</span>Senin
                            - Jumat: 07.30 - 16.00 WIB</p>
                    </div>
                </div>
                <div class="lg:col-span-2 flex flex-col gap-space-sm"><span
                        class="font-title-lg text-title-lg text-on-surface">Kanal Resmi</span>
                    <p class="font-body-sm text-body-sm text-on-surface-variant">Ikuti info dan dokumentasi kegiatan
                        belajar mengajar.</p>
                    <div class="flex items-center gap-space-xs"><a
                            class="w-9 h-9 rounded-full bg-surface-container flex items-center justify-center text-on-surface-variant hover:bg-primary-container hover:text-on-primary transition-all"
                            href="#"><span class="material-symbols-outlined text-[20px]">globe</span></a><a
                            class="w-9 h-9 rounded-full bg-surface-container flex items-center justify-center text-on-surface-variant hover:bg-primary-container hover:text-on-primary transition-all"
                            href="#"><span class="material-symbols-outlined text-[20px]">videocam</span></a><a
                            class="w-9 h-9 rounded-full bg-surface-container flex items-center justify-center text-on-surface-variant hover:bg-primary-container hover:text-on-primary transition-all"
                            href="#"><span
                                class="material-symbols-outlined text-[20px]">photo_camera</span></a><a
                            class="w-9 h-9 rounded-full bg-surface-container flex items-center justify-center text-on-surface-variant hover:bg-primary-container hover:text-on-primary transition-all"
                            href="#"><span class="material-symbols-outlined text-[20px]">chat</span></a></div>
                </div>
            </div>
            <div
                class="pt-space-md flex flex-col sm:flex-row items-center justify-between gap-space-sm font-label-md text-label-md text-outline">
                <p>© 2025 SMA Lentera Nusantara. Seluruh Hak Cipta Dilindungi.</p>
                <div class="flex items-center gap-space-md"><a class="hover:text-on-surface transition-colors"
                        href="#">Kebijakan Privasi</a><a class="hover:text-on-surface transition-colors"
                        href="#">Syarat &amp; Ketentuan PPDB</a><a
                        class="hover:text-on-surface transition-colors" href="#">Pusat Bantuan</a></div>
            </div>
        </div>
    </footer>
</body>

</html>
