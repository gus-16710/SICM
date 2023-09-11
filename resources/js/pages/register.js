import axios from "axios";

const fetchInstitutions = async (id) => {
    $("#datos-institucion").html(`<div class="text-center">
                                    <div class="spinner-border" role="status">
                                    <span class="visually-hidden">Loading...</span>
                                    </div>
                                </div>`);

    const { data } = await axios.get("/institutions", {
        params: { id },
    });
    
    $("#datos-institucion")
        .html(`<span class="d-block">Colonia: ${data.colonia}</span>
                <span class="d-block">Calle: ${data.calle}</span> 
                <span class="d-block">CP: ${data.cp}</span>`);
};

$(window).on("load", () => {    
    $("#idinstitucion").val() && fetchInstitutions($("#idinstitucion").val());

    $("#idinstitucion").on("change", function (e) {        
        fetchInstitutions(e.target.value);        
    });
});
