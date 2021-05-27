<!-- Modal -->
<div class="modal fade" id="insertVideo" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Insert New Video From Youtube</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="post" action="{{ route('insertVideo') }}">
            @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Link Youtube</label>
                        <input type="url" class="form-control" name="link" placeholder="Link Youtube">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Tag's</label>
                        <select class="form-control" name="tag">
                        @foreach($tag as $tg)
                            <option>{{ $tg->tag }}</option>
                        @endforeach                            
                        </select>
                    </div>

        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="post" class="btn btn-primary">Save changes</button>
        </div>
    </div>
    </form>

</div>
</div>



<div class="modal fade" id="insertTag" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Insert New TAG</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="post" action="{{ route('insertTag') }}">
            @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <label for="exampleFormControlInput1">New Tag's</label>
                        <input type="text" class="form-control" onkeyup="this.value = this.value.toUpperCase();" name="tag" placeholder="Insert New Tag's">
                    </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Save changes</button>
        </div>
    </div>
    </form>

</div>
</div>
