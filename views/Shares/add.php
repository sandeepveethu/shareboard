<div class="text-center">
  <h1>Share on Shareboard</h1>
</div>

<div class="panel panel-default">
  <div class="panel-heading">
  <h3>Share Something!</h3>
  </div>
  <div class="panel-body">
    <form method="post" action="<?php $_SERVER['PHP_SELF'] ;?>">
      <div class="form-group">
        <label for="shareTitle">Share Title</label>
        <input type="text" class="form-control" id="shareTitle" name="title" placeholder="Share Title">
      </div>

      <div class="form-group">
        <label for="shareBody">Body</label>
        <textarea class="form-control" id="shareBody" rows="4" name = "body" placeholder="Write something about the Share..."></textarea>
      </div>

      <div class="form-group">
        <label for="shareLink">Link</label>
        <input type="link" class="form-control" id="shareLink" name="link" placeholder="Share Link">
      </div>

      <input class="btn btn-primary" name="submit" type="submit" value="Submit">
      <a class="btn btn-danger" name="cancel" href="<?php echo ROOT_PATH; ?>shares">Cancel</a>
    </form>
  </div>
</div>