$(window).on("load", async () => {
    const modal = new bootstrap.Modal("#modal-delete-user");

    $("#btn-open-modal").on("click", () => {                
        modal.show();
    });
    
    if($("#modal-delete-user").attr("data-open") === "1") {
        modal.show();    
    }
});
