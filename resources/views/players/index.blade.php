@extends('layouts.admin')

@section('title')
Players
@endsection
@section('content')
<div class="row mt-3">
  <div class="col">
      <h1>Players</h1>
  </div>
</div>
<div class="row">
    <div class="col-10">
        <table class="table table-light table-players">
            <thead class="thead-light">
                <tr>
                    <th>Profile</th>
                    <th>Name</th>
                    <th>Height</th>
                    <th>Position</th>
                    <th>Club</th>
                </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
    </div>
</div>
@endsection
@push('scripts')

<script>

    $(function() {
        $('.table-players').DataTable({
            processing : true,
            serverSide : true,
            ajax : "{{ route('players.index') }}",
            columns : [
                {data : 'photo', name : 'players.photo', 
                    render : function(data, type, full, meta){
                        return "<img src=\"" + data + "\" height=\"70\" />"
                    }
                },
                {data : 'name', name : 'players.name'},
                {data : 'height', name : 'players.height'},
                {data : 'position', name : 'players.position'},
                {data : 'club', name : 'club.name'}

            ]
        })
    })


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