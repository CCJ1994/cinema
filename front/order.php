<section class="my-5">
  <form class="container d-flex flex-wrap my-2 p-5" action="api/order.php" method="post">
    <div class=" col-12  form-floating my-3">
      <select class="form-select" id="movieSlt" name="movie">
        <option value="1">One</option>
        <option value="2">Two</option>
        <option value="3">Three</option>
      </select>
      <label for="movieSlt">請選擇電影</label>
    </div>
    <div class=" col-12  form-floating my-3">
      <select class="form-select" id="dateSlt" name="date">
        <option value="1">One</option>
        <option value="2">Two</option>
        <option value="3">Three</option>
      </select>
      <label for="dateSlt">請選擇日期</label>
    </div>
    <div class=" col-12  form-floating my-3">
      <select class="form-select" id="sessSlt" name="session">
        <option value="1">One</option>
        <option value="2">Two</option>
        <option value="3">Three</option>
      </select>
      <label for="sessSlt">請選擇場次</label>
    </div>
    <div class="d-flex col justify-content-end">
      <input class="btn btn-secondary" type="submit" value="訂票">
    </div>
  </form>
</section>