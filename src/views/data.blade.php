@if($data['directory'])
<div class="semi-breadcrumb">
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb active-manager">
      <li class="breadcrumb-item"><span class="badge bg-secondary"><i class="fa fa-folder"></i></span></li>
      <li class="breadcrumb-item text-truncate active"><span>{{ $data['directory'] }}</span></li>
    </ol>
  </nav>
</div>
@endif

<div class="semi-grid">
  @if(count($data['images']) > 0)
  <div class="d-flex align-content-start flex-wrap">
    @foreach($data['images'] as $image)

      @if ($image['type'] == 'directory')
        <div class="semi-grid-item text-center" title="{{ $image['name'] }}">
          <div class="semi-item-icon"><a href="{{ $image['href'] }}" class="directory" style="vertical-align: middle;"><i class="fa fa-folder"></i></a></div>
          <div class="semi-item-info">{{ $image['name'] }}</div>
        </div>
        <!-- <label><input type="checkbox" name="path[]" value="{{ $image['path'] }}" />{{ $image['name'] }}</label> -->
      @endif

      @if ($image['type'] == 'image')
        <div class="semi-grid-item text-center" title="{{ $image['name'] }}">
          <div class="semi-item-icon">
            <figure class="semi-thumbnail">
              <img src="{{ asset('storage/'.$image['thumb']) }}" alt="{{ $image['name'] }}" class="img-thumbnail">
            </figure>
          </div>
          <label class="semi-item-info"><input type="checkbox" name="path[]" value="{{ $image['path'] }}" /> {{ $image['name'] }}</label>
        </div>
      @endif

    @endforeach
  </div>
  @else
    <h4 class="text-center">No Data Found</h4>
  @endif
</div>

{{-- @foreach($data['images'] as $image)
<div class="col-sm-3 col-xs-6 text-center">
  
  @if ($image['type'] == 'directory')
  <div class="text-center"><a href="{{ $image['href'] }}" class="directory" style="vertical-align: middle;"><i class="fa fa-folder fa-5x"></i></a></div>
  <label>
    <input type="checkbox" name="path[]" value="{{ $image['path'] }}" />
    {{ $image['name'] }}</label>
  @endif

  @if ($image['type'] == 'image')
  <a href="{{ asset($image['href']) }}" class="thumbnail"><img src="{{ asset('storage/'.$image['thumb']) }}" alt="{{ $image['name'] }}" title="{{ $image['name'] }}" /></a>
  <label>
    <input type="checkbox" name="path[]" value="{{ $image['path'] }}" />
    {{ $image['name'] }}</label>
  @endif

</div>
@endforeach --}}