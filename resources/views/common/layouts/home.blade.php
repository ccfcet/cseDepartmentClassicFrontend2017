<!doctype html>
<html lang="en">
<head>
  {{-- include html head --}}
  @include('common.layouts.elements.head')

</head>
<body>
  {{-- include menu --}}
  @include('common.layouts.elements.menu')

  <div class="container-fluid" id="mainContent">
    <div id="mainContentOverlay" onclick="$('#mainMenuButton').click();">
    </div>
    {{-- include headerRow --}}
    @include('common.layouts.elements.headerRow')

    <div id="contentsContainer">
      @yield("homeBody","code is poetry")
    </div>
  </div>
  {{-- include search --}}
  @include('common.layouts.elements.search')

  {{-- include common scripts --}}
  @include('common.layouts.elements.scripts')

</body>
</html>
