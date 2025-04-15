<form role="search" method="get" action="<?php echo home_url('/'); ?>">
    <div class="input-group">
        <input type="text" name="s" class="form-control bg-black" value="<?php the_search_query(); ?>" placeholder="Search Site...">
        <span class="input-group-btn">
            <button class="btn btn text-white bg_red rounded-0 border-0" type="submit">Rechercher</button>
        </span>
    </div>
</form>
		