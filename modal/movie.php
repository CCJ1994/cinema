<form action="./api/addmovie.php" method="post" enctype="multipart/form-data">
  <div class="text-end my-2 border-bottom addtitle">
    <h4>新增電影</h4>
  </div>
  <div class="row g-3 text-muted justify-content-center my-2">
    <div class="col-6">
      <label for="addzhName" class="form-label">中文片名</label>
      <input class="form-control" id="addzhName" name="zhname" type="text">
    </div>
    <div class="col-6">
      <label for="addenName" class="form-label">英文片名</label>
      <input class="form-control" id="addenName" name="enname" type="text">
    </div>
    <div class="col-4">
      <label for="addLevel" class="form-label">分級</label>
      <select select name="level" id="addLevel" class="form-select" required>
        <option selected>請選擇分級</option>
        <option value="1">普遍級</option>
        <option value="2">輔導級</option>
        <option value="3">保護級</option>
        <option value="4">限制級</option>
      </select>
    </div>
    <div class="col-4">
      <label for="addonDate" class="form-label">上映日期</label>
      <input class="form-control" id="addLonDate" name="ondate" type="date">
    </div>
    <div class="col-4">
      <label for="addLength" class="form-label">片長</label>
      <input class="form-control" id="addLength" name="length" type="text">
    </div>
    <div class="col-6">
      <label for="addActor" class="form-label">演員</label>
      <input class="form-control" id="addActor" name="actor" type="text">
    </div>
    <div class="col-6">
      <label for="addDirector" class="form-label">導演</label>
      <input class="form-control" id="addDirector" name="director" type="text">
    </div>
    <div class="col-12">
      <label for="addIntro" class="form-label">劇情簡介</label>
      <textarea class="form-control" id="addIntro" name="intro" required></textarea>
    </div>
    <div class="col-10">
      <div class="input-group">
        <input type="file" class="form-control" name="img" required>
      </div>
    </div>

    <div class="col-2">
      <input type="submit" class="btn btn-outline-secondary" value="新增">
    </div>
  </div>
</form>