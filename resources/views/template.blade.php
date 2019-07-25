
@include('layouts.header')
        <h1 class="cover-heading">Cover your page.</h1>
        <p class="lead">Cover is a one-page template for building simple and beautiful home pages. Download, edit the text, and add your own fullscreen background photo to make it your own.</p>
        <p class="lead">
            <a href="#" class="btn btn-lg btn-secondary">Learn more</a>
        </p>
        {{ Form::open(['action'=> ['StudentController@destroy', $student->id], 'method'=>'POST']) }}
        {{ method_field('DELETE') }}
        {{ Form::submit('Delete',['class'=>'btn btn-danger']) }}
        {{ Form::close() }}
@include('layouts.footer')
