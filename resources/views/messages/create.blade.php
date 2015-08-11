<div class="row nopadding">
    <form id="create-message">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">

        <div class="col-xs-8 col-sm-10 nopadding">
            <textarea name="message" id="message" class="form-control" rows="3" placeholder="Enter a message..."></textarea>
        </div>
        
        <div class="col-xs-4 col-sm-2 nopadding">
            <button type="submit" class="btn btn-large">
                <span class="visible-xs"><i class="glyphicon glyphicon-send"></i></span>
                <span class="hidden-xs">Post</span>
            </button>
        </div>

    </form>
</div>
