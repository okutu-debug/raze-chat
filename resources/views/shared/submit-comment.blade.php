<form action="{{route('posts.comments.store', $post->id)}}" method="POST">
    @csrf
    <div class="flex gap-3">
        <div class="bg-pink-100 rounded-full size-9 shrink-0 dark:bg-pink-500/20">
            <img src="{{asset ('images/profile_icon.png')}}" alt="" class="rounded-full size-9">
        </div>
        <div class="grow">
            <input type="text" name="comment" id="commentInput" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200" placeholder="Write your comment ...">
        </div>
        <div class="shrink-0">
            <button type="submit" class="text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20">Send</button>
        </div>
    </div>
</form>

