<footer>
    <p>Designed and Developed by Aimee Piketh and Connor Weideman</p>
</footer>
<script>
let toggle = true;
const ul = document.querySelector("nav ul");
document.querySelector("nav #expand").addEventListener("click", () => {
    if (toggle) {
        ul.style = `bottom: -${ul.clientHeight - 1}px`;
    } else {
        ul.style = "";
    }
    toggle = !toggle;
});
</script>
</body>
<?php wp_footer()?>