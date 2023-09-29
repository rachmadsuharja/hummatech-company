<style>
    .wrapper {
        width: 100%;
    }
    .bg {
        border: 0;
        border-radius: 1em;
        padding: 2em;
        background: black;
    }
    h4 {
        font-weight: normal;
    }
</style>

<body>
    
    <div class="row">
        <div class="bg">
            <img style="background: black" src="https://hummasoft.com/wp-content/uploads/2023/03/Logo-Hummasoft-Bw.png" alt="">
        </div>
        <div class="col">
            <h3><b>Replied to: </b>{{ $inbox->subject }}</h3>
        </div>
        <div class="col">
            <h3>Halo, {{ $inbox->name }}</h3>
            <p>{{ $inbox->replied_message }}</p>
        </div>
        <div class="col">
            <p>Terima Kasih</p>
        </div>
    </div>

</body>