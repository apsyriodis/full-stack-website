<template>
    <div>
        <h1 class="text-4xl mb-4 -ml-1 flex items-center justify-center uppercase">
            Full Logo
        </h1>

        <div>
            <picture style="height: 382px;" class="block shadow flex items-center justify-center mb-6 border border-gray-300">
                <img src="/images/logo.svg" alt="logo">
            </picture>

            <div class="flex justify-between">
                <p>Original Logo on <strong>white</strong> background</p>
                <a class="border border-gray-300 py-1 px-5 rounded-full bg-gray-100 hover:bg-gray-200" href="/images/logo.svg">logo.svg</a>
            </div>
        </div>

        <div class="mt-16">
            <picture style="height: 382px;" class="bg-blue-800 block shadow flex items-center justify-center mb-6 border border-gray-300">
                <img src="/images/negative-logo.svg" alt="logo2">
            </picture>

            <div class="flex justify-between">
                <p>Negative Logo with accent on <strong>dark</strong> background</p>
                <a class="border border-gray-300 py-1 px-5 rounded-full bg-gray-100 hover:bg-gray-200" href="/images/negative-logo.svg">negative-logo.svg</a>
            </div>
        </div>

        <div class="mt-16 mb-16">
            <picture style="height: 382px;" class="block shadow flex items-center justify-center mb-6 border border-gray-300 bg-black">
                <img src="/images/pure-negative-logo.svg" alt="logo3">
            </picture>

            <div class="flex justify-between">
                <p>Pure negative Logo on <strong>dark</strong> background</p>
                <a class="border border-gray-300 py-1 px-5 rounded-full bg-gray-100 hover:bg-gray-200" href="/images/pure-negative-logo.svg">pure-negative-logo.svg</a>
            </div>
        </div>



    </div>
</template>

<script>
export default {
    
}
</script>
