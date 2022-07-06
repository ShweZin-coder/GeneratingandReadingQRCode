const wrapper = document.querySelector(".wrapper"),
form = wrapper.querySelector(".wrapper form"),
qrfile = form.querySelector("form input");
function fetchRequest(formData,scan)
{
   fetch("http://api.qrserver.com/v1/read-qr-code/",{
         method: "POST",
         body:formData
   }).then(res => res.json()).then(result =>
    {
      result = result[0].symbol[0].data;
      wrapper.querySelector("textarea").innerText = result;
      form.querySelector("img").src=URL.createObjectURL(scan);
      wrapper.classList.add("active");
      console.log(result);

    });

}
qrfile.addEventListener("change", e =>{
  let scan = e.target.files[0];
  let formData = new FormData();
  formData.append("file",scan);
  fetchRequest(formData, scan);
});
form.addEventListener("click",()=> qrfile.click());

