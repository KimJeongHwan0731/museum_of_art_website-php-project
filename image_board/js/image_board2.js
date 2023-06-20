document.addEventListener("DOMContentLoaded", () => {
  const complete = document.querySelector("#complete2");
  complete.addEventListener("click", () => {
    if (!document.image_board_form.subject.value) {
      alert("제목을 입력하세요!");
      document.image_board_form.subject.focus();
      return;
    }

    if (!document.image_board_form.upfile.value) {
      alert("파일을 첨부해주세요");
      return;
    }
    document.image_board_form.submit();
  });
});
