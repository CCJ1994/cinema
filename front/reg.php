<section class="my-5">
  <div class="container p-3">
    <h1 class="text-center my-5">加入會員</h1>
    <div class="container overflow-hidden">
      <div class="d-flex flex-column  flex-wrap">
        <form class="container d-flex flex-wrap my-2 border-bottom pb-5" action="api/reg.php" method="post">
          <div class="col-md-3 col-12 form-floating mb-4 bgShadow">
            <input type="text" class="form-control border-0" id="acc" name="acc" placeholder="your account" maxlength="16" required>
            <label for="acc">帳號</label>
          </div>
          <div class="col-md-3 col-12  offset-md-1 form-floating mb-4 bgShadow">
            <input type="password" class="form-control border-0" id="pw" name="pw" placeholder="your password" minlength="8"
              maxlength="16" required>
            <label for="pw">密碼</label>
          </div>
          <div class="col-md-4 col-12 offset-md-1 form-floating mb-4 bgShadow">
            <input type="date" class="form-control border-0" id="birth" name="birth" placeholder="your birthday" minlength="8"
              required>
            <label for="birth">生日</label>
          </div>
          <div class="col-lg-5 col-md-5 col-12 form-floating mb-4 bgShadow">
            <input type="text" class="form-control border-0" id="name" name="name" placeholder="your name" required>
            <label for="name">姓名</label>
          </div>
          <div class="col-lg-6 col-md-6 col-12 offset-lg-1 offset-md-1 form-floating mb-4 bgShadow">
            <input type="tel" class="form-control border-0" id="tel" name="tel" placeholder="your number" minlength="8"
              maxlength="10" required>
            <label for="tel">電話</label>
          </div>
          <div class="col-12 form-floating mb-4 bgShadow">
            <input type="email" class="form-control border-0" id="email" name="email" placeholder="email address"
              required>
            <label for="email">信箱</label>
          </div>
          <div class="d-flex col justify-content-end">
            <input class="btn btn-outline-secondary" style="font-weight: 600;" type="submit" value="註冊">
          </div>
        </form>
      </div>
    </div>
  </div>
</section>