<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
  <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="css/contact.css">
  <title></title>
</head>
<body>
  <button class="btn-button js-buy-ticket">click</button>

  <div class="modal-js-modal">
    <div class="modal-container js-modal-container">
      
      <div class="modal-close js-modal-close">
        <i class="fas fa-times"></i>
      </div>

      <header class="modal-header">
        Liên hệ với chúng tôi
      </header>

      <div class="modal-body">
        <form action="https://formspree.io/f/xqknzeyj" method="post">
          <label for="" class="modal-label">
            Tên của bạn:
          </label>
          <input type="text" class="modal-input" name="Name" required="" title="yêu cầu nhập tên của bạn">

          <label for="" class="modal-label">
            Số điện thoại:
          </label>
          <input type="text" class="modal-input" name="Phone-Number" required="" title="yêu cầu nhập số điện thoại" pattern="[0-9]{10}">

          <label for="" class="modal-label">
            Email:
          </label>
          <input type="email" class="modal-input" name="Email" required="" title="yêu cầu nhập email ">

          <label for="" class="modal-label">
            Tin nhắn:
          </label>
          <textarea class="modal-input" name="Message" required="" title="yêu cầu nhập nội dung"></textarea>
          <!-- your other form fields go here -->
          <button id="send" type="submit">Gửi thông tin</button>
        </form>
      </div>
    </div>
  </div>

  <script>
    const byBtn = document.querySelector('.js-buy-ticket')
    const byoneBtn = document.querySelector('.js-buyone-ticket')
    const bytwoBtn = document.querySelector('.js-buytwo-ticket')
    const modal = document.querySelector('.js-modal')
    const modalContainer = document.querySelector('.js-modal-container')
    const modalClose = document.querySelector('.js-modal-close')
    //ham hien thi contact
    function showBuyTickets() {
      modal.classList.add('open')
    }

    function hideBuyTicket() {
      modal.classList.remove('open')
    }
    byBtn.addEventListener('click', showBuyTickets)
    byoneBtn.addEventListener('click', showBuyTickets)
    bytwoBtn.addEventListener('click', showBuyTickets)

    modalClose.addEventListener('click', hideBuyTicket)

    modal.addEventListener('click', hideBuyTicket)

    modalContainer.addEventListener('click', function (event) {
      event.stopPropagation()
    })
  </script>
</body>
</html>