@extends('layouts.admin')

@section('title')
List Clubs
@endsection
@section('content')
<div class="row mt-3">
  <div class="col-10">
    <h1>Clubs</h1>
    <form class="form-inline">
      <div class="form-group row">
        <label class="mr-sm-2 sr-only" for="inlineFormCustomSelect">select club</label>
        <div class="col-auto my-1">
          <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
            <option selected>Choose...</option>
            <option value="1">One</option>
            <option value="2">Two</option>
            <option value="3">Three</option>
          </select>
        </div>
        <div class="col-sm-8">
          <button type="submit" class="btn btn-primary mb-2">Search</button>
        </div>
      </div>
    </form>
  </div>

</div>
<div class="row">
  <div class="col">

    <table class="table table-light clubs-table" id="clubs-table">
      <thead class="thead-light">
        <tr>
          <th>Logo</th>
          <th>Name Clubs</th>
          <th>Stadium Name</th>
          <th>Trophy</th>
          <th>Website Official</th>
          <th>Action</th>
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


  $(function () {

    $('.clubs-table').DataTable({
      processing: true,
      serverSide: true,
      ajax: "{{ route('clubs.list') }}",
      columns: [{
          data: 'logo',
          name: 'clubs.logo',
          render: function (data, type, full, meta) {
            return "<img src=\"" + data + "\" height=\"70\"  />"
          },
          orderable: false
        },
        {
          data: 'name',
          name: 'clubs.name'
        },
        {
          data: 'stadium',
          name: 'stadium.name'
        },
        {
          data: 'trophy',
          name: 'clubs.trophy'
        },
        {
          data: 'url',
          name: 'clubs.url',
          render: function (data, type, row) {
            return "<a href='" + row.url + "'>" + row.url + "</a>"
          },
        },
        {data: 'action', name: 'action', orderable: false, searchable: false}
      ]

    });

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