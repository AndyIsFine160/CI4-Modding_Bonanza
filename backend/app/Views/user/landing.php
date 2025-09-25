<!-- app/Views/user/landing.php -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Modding Bonanza - Discover & Share Mods</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Tailwind CSS via CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <meta name="theme-color" content="#6366f1">
</head>

<body class="bg-gradient-to-br from-blue-600 via-violet-700 to-blue-900 min-h-screen font-sans text-white">

    <!-- Header -->
    <header class="bg-violet-800/90 shadow-lg">
        <div class="flex justify-between items-center mx-auto px-6 py-4 container">
            <div class="flex items-center gap-2">
                <svg class="w-8 h-8 text-blue-300" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path d="M12 2L2 7l10 5 10-5-10-5zm0 13v7m0 0l-7-4m7 4l7-4"></path>
                </svg>
                <span class="font-bold text-blue-200 text-2xl tracking-tight">Modding Bonanza</span>
            </div>
            <nav class="flex gap-6">
                <a href="#" class="hover:text-blue-300 transition">Home</a>
                <a href="#" class="hover:text-blue-300 transition">Mods</a>
                <a href="#" class="hover:text-blue-300 transition">Upload</a>
                <a href="#" class="hover:text-blue-300 transition">Community</a>
                <a href="#" class="hover:text-blue-300 transition">Login</a>
            </nav>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="flex md:flex-row flex-col items-center gap-12 mx-auto px-6 py-16 container">
        <div class="flex-1">
            <h1 class="drop-shadow-lg mb-4 font-extrabold text-blue-100 text-4xl md:text-5xl">
                Discover, Share, and Download <span class="text-violet-300">Game Mods</span>
            </h1>
            <p class="mb-8 text-blue-200 text-lg">
                The open platform for modders and gamers. Browse trending mods, upload your creations, and join a vibrant community.
            </p>
            <form class="flex gap-2 max-w-lg">
                <input
                    type="text"
                    placeholder="Search mods..."
                    class="flex-1 bg-blue-100 px-4 py-2 rounded-l-md focus:outline-none text-blue-900 placeholder-blue-400">
                <button
                    type="submit"
                    class="bg-violet-600 hover:bg-violet-700 px-5 py-2 rounded-r-md font-semibold text-white transition">
                    Search
                </button>
            </form>
        </div>
        <div class="flex flex-1 justify-center"> <!-- LOGO PLACEHOLDER -->
            <img src="https://cdn.modrinth.com/data/YL57xq9U/18d0e7f076d3d6ed5bedd472b853909aac5da202_96.webp"
                alt="Mods illustration"
                class="bg-blue-900/30 drop-shadow-xl border-4 border-blue-400/30 rounded-xl w-80 h-80 object-contain"
                loading="lazy">
        </div>
    </section>

    <!-- Trending Mods -->
    <section class="mx-auto px-6 py-10 container">
        <h2 class="mb-6 font-bold text-blue-100 text-2xl">Trending Mods</h2>
        <div class="gap-8 grid grid-cols-1 md:grid-cols-3">
            <!-- Example mod card -->
            <?php
            // $mods = [...]; // Example: fetch from controller/service
            $mods = [
                [
                    'title' => 'THE CREATE MOD',
                    'author' => 'simibubi',
                    'desc' => 'YES! IT IS THE CREATE MOD! The one and only CREATE MOD!',
                    'image' => 'https://rocketnode.com/img/blog42photo1.png',
                    'downloads' => 6.74e6,
                ],
                [
                    'title' => 'Farmer\'s Delight',
                    'author' => 'Vectowring',
                    'desc' => 'All in one farming mod ',
                    'image' => 'https://i.tlauncher.org/images/farmers-delight-mod.jpg',
                    'downloads' => 6.52e6,
                ],
                [
                    'title' => 'RLCraft',
                    'author' => 'Shivaxi',
                    'desc' => 'A modpack centered around challenge and realism',
                    'image' => 'https://i.imgur.com/MzWz0e4.png',
                    'downloads' => 22000,
                ],
            ];
            foreach ($mods as $mod): ?>
                <div class="flex flex-col bg-blue-800/80 shadow-lg rounded-lg overflow-hidden">
                    <img src="<?= esc($mod['image']) ?>" alt="<?= esc($mod['title']) ?>"
                        class="bg-blue-900/50 w-full h-40 object-cover">
                    <div class="flex flex-col flex-1 p-5">
                        <h3 class="mb-1 font-semibold text-violet-200 text-xl"><?= esc($mod['title']) ?></h3>
                        <span class="mb-2 text-blue-300 text-sm">by <?= esc($mod['author']) ?></span>
                        <p class="flex-1 text-blue-100"><?= esc($mod['desc']) ?></p>
                        <div class="flex justify-between items-center mt-4">
                            <span class="text-blue-300 text-xs"><?= number_format($mod['downloads']) ?> downloads</span>
                            <a href="#" class="bg-violet-600 hover:bg-violet-700 px-3 py-1 rounded font-medium text-white text-sm transition">View</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </section>

    <!-- Call to Action -->
    <section class="mx-auto px-6 py-12 text-center container">
        <h2 class="mb-4 font-bold text-blue-100 text-2xl">Ready to share your own mod?</h2>
        <p class="mb-6 text-blue-200">Join our community and help shape the future of gaming mods.</p>
        <a href="#" class="inline-block bg-blue-600 hover:bg-violet-700 shadow-lg px-8 py-3 rounded-lg font-semibold text-white transition">
            Upload Your Mod
        </a>
    </section>

    <!-- Footer -->
    <footer class="bg-violet-900/90 mt-12 py-6">
        <div class="flex md:flex-row flex-col justify-between items-center gap-4 mx-auto px-6 container">
            <span class="text-blue-200">&copy; <?= date('Y') ?> Modding Bonanza. All rights reserved.</span>
            <nav class="flex gap-4 text-blue-300 text-sm">
                <a href="#" class="hover:text-blue-100">About</a>
                <a href="#" class="hover:text-blue-100">Terms</a>
                <a href="#" class="hover:text-blue-100">Privacy</a>
                <a href="#" class="hover:text-blue-100">Contact</a>
            </nav>
        </div>
    </footer>
</body>

</html>
</section>
</div></svg>