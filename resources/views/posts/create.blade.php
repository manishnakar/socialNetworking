
@extends('layouts.app');

@section('content')


<div class="row">
	<dic class="col-md-6 col-md-offset-3">
		<div class="panel panel-default">
		<div class="panel-heading">
		Create Post {{ $latestPosts }}
			</div>

			<div class="panel-body text-center">

				<form class="form-horizontal" role="form" method="POST" action="{{ url('/posts') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="content" class="col-md-4 control-label">Content</label>

                            <div class="col-md-6">
                                <textarea id="content" class="form-control" name="content" value="{{ old('content') }}" required autofocus></textarea>

                                @if ($errors->has('content'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('content') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="checkbox" >

                        		<label for="live"  class="col-md-4 control-label"></label>
                        		<div class="col-md-6">
                        			<input type="checkbox" name="live">Live
                        		</div>


                        </div>

                        <div class="form-group">
                        		<label for="post_on"  class="col-md-4 control-label">Post on</label>
                        		<div class="col-md-6">
                        			<input type="datetime-local" name="post_on" class="form-control">
                        		</div>
                        </div>



                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Submit
                                </button>
                            </div>
                        </div>
                    </form>

			</div>
		</div>
	</dic>

</div>


@endsection