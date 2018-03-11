@extends('common.layouts.page')

@section('body')
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <h1 id="pageTitle"><?php echo $infoData[0]->title; ?></h1>
      <p id="pageP_Tag"><?php echo $infoData[0]->data; ?></p>
    </div>
  </div>
</div>
@endsection
