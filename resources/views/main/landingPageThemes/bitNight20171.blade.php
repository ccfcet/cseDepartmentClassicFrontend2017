@extends('common.layouts.home')

@section('homeBody')
<script src="<?php echo url('/'); ?>/assets/js/sub/addTransparency.js" async></script>
<link rel="stylesheet" type="text/css" href="<?php echo url('/'); ?>/assets/css/sub/bitNight20171.php">
<div id="bitNight20171" style="">
  <h1 id="landingDisplayText">
    Live your passion.
  </h1>
  <h3 id="landingDisplayTextSub">
    Campus life, redefined.
  </h3>
  <a id="landingDisplayButton" class="btn btn-lg btn-default">Explore.</a>
  <div class="actionNavOverride" data-extraMarginLeftProvided="6vw"></div>
</div>
@endsection
