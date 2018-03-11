@extends('common.layouts.page')

@section('body')
<script src="<?php echo url('/'); ?>/assets/js/sub/addTransparency.js" async></script>
<script src="<?php echo url('/'); ?>/assets/js/sub/terminalWelcome.js" defer></script>
<link rel="stylesheet" type="text/css" href="<?php echo url('/'); ?>/assets/css/sub/terminalWelcome.php">
<div id="terminalWelcome" style="padding-top: 30px; padding-left: 23px;">
  <div class="terminal">
    <p id="startlines">The department was started in the year 1984. It offers B.Tech and M.Tech programmes in Computer Science and Engineering and an M Tech in Information Security. For B.Tech, intake is sixty per batch and for M Tech, 18 per batch.<br><br></p>
    <p id="welcomelines"></p>
    <span id="terminalcursor"></span>
    <form autocomplete="off">
    <input id="terminalInput" type="text" name="terminalInput" style="display: none;" value="" autofocus>
  </form>
    <!-- </input> -->
    <!-- <div id="terminalInput" contenteditable="true">hey</div> -->
  </div>
</div>
@endsection
