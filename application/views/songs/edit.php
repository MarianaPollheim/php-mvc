<div class="container">
    <div>
    <h3></h3>
        <form action="<?php echo URL; ?>songs/updatesong" method="POST">
            <label>Artist</label>
            <input type="text" name="artist" value="<?= $song->artist ?>" required />
            <label>Track</label>
            <input type="text" name="track" value="<?= $song->track ?>" required />
            <label>Link</label>
            <input type="text" name="link" value="<?= $song->link ?>" />
            <input type="hidden" name="song_id" value="<?= $song->id ?>"/>
            <input type="submit" name="submit_update_song" value="Update" />
        </form>
    </div>
</div>