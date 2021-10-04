const stateResult = document.getElementById("state_id");
const postcodeInput = document.getElementById("postcode");

postcodeInput.addEventListener("keyup", (e) => {
    const value = e.currentTarget.value;
    stateResult.disabled = false;
    if (value === ""){
        stateResult.disabled = true;
    }
});
