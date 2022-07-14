import * as bootstrap from 'bootstrap'
import Swal from 'sweetalert2'

let viteModal = document.querySelector('#viteModal');
let clickMe = document.querySelector("#clickMe");
let myModal = new bootstrap.Modal(viteModal);

clickMe.addEventListener('click',function (){
    // myModal.show();

    Swal.fire({
        title: 'Custom width, padding, color, background.',
        width: 600,
        padding: '3em',
        color: '#716add',
        background: '#fff url(/images/trees.png)',
        backdrop: `
    rgba(0,0,123,0.4)
    url("/images/nyan-cat.gif")
    left top
    no-repeat
  `
    })
})
