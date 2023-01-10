<div>
    <form wire:submit.prevent="submitForm">
        <div class="mb-4">
            <label for="" class="lmslabel">Name</label>
            <input type="text" class="lmsinput" value="{{$lead->name}}"/>
        </div>
        
    </form>
</div>
