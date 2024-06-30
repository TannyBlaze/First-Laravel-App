@extends("view.index")

@section("content")
<form action="/register" method="POST" class="card shadow-sm col-6 mx-auto my-3 p-3 text-dark">
    @csrf
    <div>
        @if(isset($message))
        <span class="alert alert-{{$status ? 'success' : 'danger'}} d-block text-center">{{$message}}</span>
        @endif
    </div>
    <h4 class="text-center">Sign Up</h4>

    <div class="row">
        <div class="form-group mb-4 col">
            <label for="">Name</label>
            <input type="text" name="name" class="form-control">
        </div>
        <div class="form-group mb-4 col">
            <label for="">Username</label>
            <input type="text" name="username" class="form-control">
        </div>
    </div>
    <div class="form-group mb-4">
        <label for="">Email</label>
        <input type="text" name="email" class="form-control">
        <div class="form-text">We'll never share your email with anyone else.</div>
    </div>
    <div class="row">
        <div class="form-group mb-4 col">
            <label for="">Password</label>
            <input type="password" name="password" class="form-control">
        </div>
        <div class="form-group mb-4 col">
            <label for="">Phone</label>
            <input type="text" name="phone" class="form-control">
        </div>
    </div>
    <div class="mb-3 form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1">
        <label class="form-check-label" for="exampleCheck1">Remember me</label>
    </div>
    <div class="form-group mb-4">
        <button class="btn btn-primary btn-block" type="submit">Sign Up</button>
    </div>
    <div class="text-center">
        <p>or sign up with</p>
        <!-- Google -->
        <a class="btn bg-white me-3" data-mdb-ripple-init role="button">
            <img src="data:image/jpeg;base64,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" alt="" style="width: 20px;">
        </a>

        <!-- Github -->
        <a class="btn text-white" data-mdb-ripple-init style="background-color: #24292E;" role="button">
            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAMwAAADACAMAAAB/Pny7AAAAe1BMVEUbHyP///8AAAAYHCAVGh78/Pz39/fv7+/z8/MTGB0AAAnm5ubp6ens7OwAAAYQFRoIDxWsrK2ysrPa2tqZmZqRkpODhIUACRBpamzOzs/Iycl3eHnU1NRbXF64uLglKCxTU1Q1NzmioqNJTE4eHR0sLzE+P0BiY2MoKCh064GnAAAJe0lEQVR4nO1da3eqOhCFCSrgg/BGEEWo2P//Cy+oPa2aCWoSdK2b/anr2NOwyWTeGQ1DQ0NDQ0NDQ0NDQ0NDQ0NDQ0NDQ+N1EIemLpzgptR59+O8CpKeKBhNmRVJhyIrG+P0Tyl597M9BavfjCrx8/lyZtv29ITuh9lyvvaTqvtwZb37GR8C8bpHzYK5ycE8yFYA3mfvUHdCvK+qXvCI/GBRV18edT6VkEOdfekvH2FyxtIv985HagUHdmW8eZzJGWFc7sB797PfwIFDEcyepdLDDoo9fNLuEDgk2+krVHpM8+QAH3N2AJL8ZSoXOp1F+gRQyDa2CJUe9iYD+m4m3bbs85fOyi1m+f7dm0MheciqPIJF8tbNIat2LYtKj3W7epsi8LxC+LBcwy68NxmdtPXlUunht+k7uMBRqoj9YH0cXw9YUDzhhT2DZQEjxweeGwmZSR6mkTvqwaHEn6jiYpoTn4yoo+l3oJBLxyb4Ho1Nx0UllR6jsfG+lHPp2HyNcm6cMbj0bEYIciyvHoOLadaeeg0N0ThcTDNSbj2hGIuLaRaK2UCmVCdfY5IpZZM23OSebMwbhV6nRfMxuZhmTtUpAWA5MXlSxP5GTPrCIC4Khpac+MoEje0oZyvPMb732csBwTxpvw3Hc1tGCnGpSgnQPet5N21nqglxUjCiV7Zn24LrWKTPuMeMj9d7JX4NcZmBZUR+wnYHIJ4+x2e6TX+TGG7B+s++qyItkBbMlFKy+vM7APXy9okm0wvuHtXOrxKztGKlqmeFAo3m7ZmabHG8WsuCdvvDebqch+v1NqijKI7jKPK3+XoTLn5yINNNcZ1acg5b1gr5Xr7L6SWslcx1cyPTNC3WE3MW5kFUlAe4gdFksb9dL7pjH90lmF2215dIJ+Pt2eZye7h1brvNieqk6uuX6V1xzKF9hbAtojq7r2QASwN0tKVvDWUvZPqM2hdNAbjWzluByyjTQsJOw8WSFZpFkPxF7cpbZIUkfKZErh+AOv4y/XQXy15JDgYA4SKZDJaEl0oGj8jkihlWHJH5ygighp2lAF4FJFhicSKxTAhsG9PjXjULLINozA6JtK0hEKKrbG6NpsAyKZ4qCaVtTVriZZhZJs11cvZMd+YEu5S1DOCLdAIgjQw9cmLyrSQ5cwxcyrpV9rIsWoqfzE7ODDlnE1CN2SO2ZEkzLTk7M5MUcnKlLCDytBlFfLOzBEgh4+w40b3UqJYAp0i63sl4ayvUyZCeb3A8PJW1KFbDf2AQUONxvSwd82+tDD2ek1rCWiTFj8xcnsW8APCt2UpoVPUa9MgoSNGlDaoD7gL0F+BmqMK0D/JTDYC+ukUm7qBDjB6ZXEG2MS1ROYjFl+N4f6XEWOYfAJWzWthxsnZoBXOiJA0M6Hri0YbXovpFhZTx5Gzdih5RjsMkL2C6AppumJei6izNUBkWflFsAGY3beHQaYUXZBW17+J2U9ihcfEgQ1EZCPc2E1HtiaVlOydTFRk0rSWapiUE/dOhKjKoLPzWtV4D2aE2UxUZXLDrnRgZa4dKsCoyK5RMcBBLN1gH1CCPL2bBThmZhSoyqMoR9WeQOmOPqSoy6CkVJcPZGWV2Rpmn+Q4yqAcgrABwbWZKyf3cA1DPVlQBEAOPzY4qYjOO12zWhqDRdPAuRglhLGvFFbpgJFrY4mSzFQVnFbqgcMGB4zXP1ITNuCgIe80ps9XoDCW9uoBeXJ0ItwSlRzzTrKKxjeDnfykcadIKrzSpODScVuOwEs0BcLIzpq3gkjWnGJQLJx2IgVvNqXzl7BC83uQLmhmD3y6/kZ7TAE6fp4Q2Dbxtoq+bS94ah+AndCohT5dyC9pU7tZAjL+5+VG8SI/0Zl62Rm5Wk+450xGk9Gri8cVpBZm1Mzwu6xDIeG+8re9PpcR+o4xz9VOO6kxLXoPGREoR+ATKvfUdSumeISn3asbiKEnQvB2vecLM5XSeM+9myH5lBuXEtKakyrnB9zVPbGRcrXY5yYYeCwmKuQdxB8bJzAvR0TEEqoFrRhtZ9xt4PRon2PVeSKmlkPCUjClPyrqjeRgcyLAu4GUx8KAKhhaQ2HLAaQL5wSyv4KWolsLBH76VJzF0cq8rwHYQ1fczv+z8CM/OKSIAh+Duxg0DlcRLNPBXn80B0tQFhlmwa6/77LHWQEIowOBZuUBqkn51/PuX25PR94DVtDPzj99fnkc9zig2p//466uKH2PS4SjNzehxVc8O2/QkTnBg+x/zbZRVFVrmcpqqTILwidtpkpNa13mGebE7+TApJ0EwxyJ2XgMbAnn+3xn06sBPg/bMpsHsqY27BZ73sHhd3ovkENCgNymg9TlUAiwO5UVt0Dx3AbKQ3W9oHW4kKj/bfGCPbOH37nODsDvkgmUZBmh289RnB8MxmILGTz467RNDa+xM/h3a+0pNc7L4acN4sOU392US6wkdIFqVYSK9TdReKrTAaBALBgwnzR7mEso0/r+469a8NM/CfUVlSDI81nYyIaMzkwUrvYmfpmf9bEB76wpUAz6uw7ouz0SQKhpvcCdoPw3nrhcsfndtOh+8hmLh7QXXUCRkPW5TtYufvmkHGn8dzpfLRbjZxu2g88zpL7qCrah18szm+hn+tJxToE1WFFm1gwfGFHI6v66gbuqE0d+zvjadYfv74KS/g+2mD0U0xMEv/v1B7ikdcUSvL593oflLRuAxMnM1Iyd+cWMjX7w9RawHyExVTp054yaEXpSvsHmITCnZ8WfBvbbedvnCPMJHyBRqullucFsQ9r9S+td9IcN9oQ+QKcaZekwgufFronZvePQCj+x2wmQm8ViDW637kk3oJ9mxR5Yl0TYaanMdIjONx5u1b0HCatjvh8ucftgOhVMDZOx4zEHhBApeFnKwy41PZpGMPCUcjpysxDAZwiETZqNPPIcGd3yFyOTNGyZqp9+osygiZvXhLTOOHYrdd90O7wzyIqYFfdP0aeIiGc2XybxzLng/r521OcOq2WCRsaM3j9OHNr+vBQy2hrPITNfV27+3oducu+mGr5DZxDCClzwIIPXmaTI3OYDQ/5Sv07CgqcPnyFwnNEK/+qDvbaFpFa//knlGm4VRSd9iWzAQStvin0sQD77m3wpJnjTWx32/FvHooYlOhdwH2twuV1lsv9l7sktJcmB59KuJo6PzgP/ueGVUl9+ewuGywujr4Q8KTfebn7knGhoaGhoaGhoaGhoaGhoaGhoaGhoa/2f8B9z9mA7fxtfxAAAAAElFTkSuQmCC" style="width: 20px;">
        </a>
    </div>

</form>
@endsection