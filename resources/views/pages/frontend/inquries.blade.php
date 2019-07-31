<div class="col-md-7">
    <h4 class="contact-title">send your massage</h4>

    @include('common.errors')
    
    <form action="{{ url('inquries') }}" method="post">
        @csrf

        <div class="row">
            <div class="col-md-6">
                <input type="text" name="name" placeholder="name">
            </div>
            <div class="col-md-6">
                <input type="text" name="mobile" placeholder="Mobile No">
            </div>
            <div class="col-md-12">
                <textarea name="message" cols="30" rows="10" placeholder="Your Message"></textarea>
                <button type="submit" class="button-default">SUBMIT</button>
            </div>
        </div>
    </form>
    <p class="form-messege"></p>
</div>