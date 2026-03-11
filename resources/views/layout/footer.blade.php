<footer id="colophon">
  <div class="mx-auto max-w-7xl overflow-hidden px-6 py-20 sm:py-24 lg:px-8">
    <nav aria-label="Footer" class="-mb-6 flex flex-wrap justify-center gap-x-12 gap-y-3 text-sm/6">
      <s:nav:main_nav select="title|url">
        <a href="{{ $url }}" class="text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white">{{ $title }}</a>
      </s:nav:main_nav>
    </nav>
    <p class="mt-10 text-center text-sm/6 text-gray-600 dark:text-gray-400">&copy; {{ Statamic::modify($now)->format('Y') }} Michael Kierspe. All rights reserved.</p>
  </div>
</footer>