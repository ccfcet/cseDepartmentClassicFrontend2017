<!doctype html>
<html lang="en">
<head>
  {{-- include html head --}}
  @include('common.layouts.elements.head')

</head>
<body>
  <div id="loaderOuterContainer">
    <div id="loaderInnerContainer">
      <div id="loader"></div>
    </div>
  </div>
  <div id="content">
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

  </div>
  {{-- include common scripts --}}
  @include('common.layouts.elements.scripts')

</body>
</html>
