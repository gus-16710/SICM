$(window).on("load", async () => {
    // prepare the data
    const source = {
        datatype: "json",
        datafields: [
            { name: "id", type: "number" },
            { name: "title", type: "string" },
            { name: "pages", type: "number" },
            { name: "created_at", type: "datetime" },
        ],
        url: "/books",
        beforeprocessing: function (resp) {
            return {
                totalrecords: resp.total,
                records: resp.data,
            };
        },
    };

    const dataAdapter = new $.jqx.dataAdapter(source, {
        loadComplete: function (data) {},
        loadError: function (xhr, status, error) {},
        formatData: function (data) {
            return {
                ...data,
                page: data.pagenum + 1,
            };
        },
    });

    $("#jqxgrid").jqxGrid({
        width: "100%",
        height: "100%",
        source: dataAdapter,
        pageable: true,
        virtualmode: true,
        rendergridrows: function (args) {
            return args.data;
        },
        columns: [
            { text: "Id", datafield: "id", width: 200 },
            { text: "Title", datafield: "title", width: 400 },
            { text: "Pages", datafield: "pages", width: 400 },
            { text: "Created at", datafield: "created_at", width: 400 },
        ],
    });
});
