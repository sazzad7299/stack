@csrf
<div class="form-group">
    <label for="question-title">Question Title</label>
    <input type="text" class="form-control {{$errors->has('title') ? 'is-invalid':''}}" name="title" id="question-title" value="{{old('title',$question->title)}}">
    @if($errors->has('title'))
    <div class="invalid-feedback">
        <strong class="float-right"> {{$errors->first('title')}}</strong>
    </div>
    @endif
</div>
<div class="form-group">
    <label for="question-body">Question body</label>
    <textarea name="body" id="question-body" class="form-control {{$errors->has('body') ? 'is-invalid':''}}" rows="10">{{old('body',$question->body)}}</textarea>
    @if($errors->has('body'))
    <div class="invalid-feedback">
        <strong class="float-right"> {{$errors->first('body')}}</strong>
    </div>
    @endif
</div>
<div class="form-group">
    <button class="btn btn-outline-primary">{{$buttonText}}</button>
</div>