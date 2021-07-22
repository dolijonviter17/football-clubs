@extends('layouts.admin')

@section('title')
 {{ $club->name  }}
@endsection
@section('content')
<div class="row mt-3">
    <div class="col-10">
        <?php
            $teams = \DB::table('players')->where('club_id', $club->id)->get();
        ?>
      <h4>{{ $club->name  }} - {{ count($teams) }} Players</h4>
    </div>
  </div>
  <div class="row">
    <div class="col">
  
      <table class="table table-light players-table" id="players-table">
        <thead class="thead-light">
          <tr>
            <th>Profile</th>
            <th>Player Name</th>
            <th>Position</th>
            <th>Height</th>

          </tr>
        </thead>
        <tbody>
            @forelse ($players as $player)
            <tr>
            <td>
                <img src="{{asset('/'. $player->photo)  }}" alt="Profile" height="70">
            </td>
            <td>{{ $player->name }}</td>
            <td>{{ $player->position }}</td>
            <td>{{ $player->height }}</td>
            @empty
            <td><span>data is still empty</span></td>   
            </tr>
            @endforelse
            
        </tbody>
      </table>

      {{ $players->links() }}

  </div>
@endsection
@push('scripts')

<script>
    
</script>



<script>


</script>

@endpush



{{-- <section id="clubs">
    <div class="container">
        <div class="row">
            <div class="col">
                Content
        </div>
    </div>
</section> --}}


{{-- @extends('layouts.admin')

@section('title')
Details Clubs
@endsection
@section('content')
<div class="row mt-3">
  <div class="col">
      <h1>Content</h1>
  </div>
</div>
@endsection
@push('scripts')

<script>


</script>

@endpush --}}