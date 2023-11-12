const imageUpload = document.getElementById('imageUpload');
const preview = document.getElementById('preview');
preview.style.width = '300px';


imageUpload.addEventListener('change', function () {
    const file = this.files[0];

    if (file) {
        const reader = new FileReader();

        reader.onload = function (e) {
            preview.src = e.target.result;
            preview.style.display = 'block';
            preview.style.margin = 'auto';
            preview.style.marginTop = '40px';
        };

        reader.readAsDataURL(file);
    } else {
        preview.style.display = 'none';
    }
});

        const majorToID = {
            'Selecione um': 0,
            'Ciência da Computação': 1,
            'Engenharia de Software': 1,
            'Sistemas de Informação': 1,
            'Ciência de Dados': 1,
            'Segurança da Informação': 1,
            'Redes de Computadores': 1,
            'Inteligência Artificial': 1,
            'Desenvolvimento Web': 1,
            'Engenharia Eletrônica': 1,
            'Engenharia de Redes': 1,
            'Engenharia de Computação': 1,
            'Análise e Desenvolvimento de Sistemas': 1,
            'Design Gráfico': 2,
            'Design de Produto': 2,
            'Design de Interiores': 2,
            'Design de Moda': 2,
            'Design de Jogos': 2,
            'Design de Comunicação': 2,
            'Design de Experiência do Usuário (UX)': 2,
            'Design de Interação': 2,
            'Design Industrial': 2,
            'Marketing Digital': 3,
            'Marketing de Conteúdo': 3,
            'Marketing de Mídias Sociais': 3,
            'Marketing de Influência': 3,
            'Marketing Estratégico': 3,
            'Publicidade e Propaganda': 3,
            'Comunicação Social com ênfase em Marketing': 3,
            'Nutrição': 4,
            'Produção de Vídeos': 5,
            'Edição de Vídeos': 5,
            'Produção de Áudio': 5,
            'Animação': 5,
            'Fotografia': 5,
            'Pós-Produção': 5,
            'Publicidade Tradicional': 6,
            'Planejamento de Campanhas': 6,
            'Estratégia de Anúncios': 6,
            'Criatividade Publicitária': 6,
            'Marketing Promocional': 6,
            'Outdoor e Mídia Impressa': 6,
            'Jornalismo de Investigação': 7,
            'Jornalismo de Dados': 7,
            'Jornalismo Esportivo': 7,
            'Jornalismo de Moda': 7,
            'Reportagem Política': 7,
            'Jornalismo Cultural': 7,
        };


        const areaSubareaMap = {
            0: ["Selecione um"],
            1: [
                "ProgramaçãoFront-End",
                "ProgramaçãoBack-End",
                "ProgramaçãoMobile",
                "ProgramaçãodeSoftware",
                "AnalistadeBancodeDados",
                "DesenvolvedordeJogos",
            ],
            2: [
                "DesignGráfico",
                "DesigndeInterfacedeUsuário(UI)",
                "DesigndeExperiênciadoUsuário(UX)",
                "DesigndeProduto",
                "DesigndeInteração",
                "DesigndeIlustração",
                "DesigndeEmbalagens",
                "DesigndeIdentidadeVisual",
                "DesigndeSites",
                "DesigndeAplicativos Móveis",
            ],
            3: [
                "MarketingDigital",
                "MarketingdeConteúdo",
                "PublicidadeOnline",
                "EstratégiadeMarketing",
                "MarketingdeMídiasSociais",
                "SEO(OtimizaçãodeMecanismosdeBusca)",
                "E-mailMarketing",
                "MarketingdeInfluência",
            ],
            4: [
                "NutriçãoClínica",
                "NutriçãoEsportiva",
                "NutriçãoInfantil",
                "NutriçãoVegana/Vegetariana",
                "NutriçãoparaEmagrecimento",
                "NutriçãoparaIdosos",
            ],
            5: [
                "ProduçãodeVídeos",
                "EdiçãodeVídeos",
                "ProduçãodeÁudio",
                "Animação",
                "Fotografia",
                "Pós-Produção",
            ],
            6: [
                "PublicidadeTradicional",
                "PlanejamentodeCampanhas",
                "EstratégiadeAnúncios",
                "CriatividadePublicitária",
                "MarketingPromocional",
                "OutdooreMídiaImpressa",
            ],
            7: [
                "JornalismodeInvestigação",
                "JornalismodeDados",
                "JornalismoEsportivo",
                "JornalismodeModa",
                "ReportagemPolítica",
                "JornalismoCultural",
            ],
        };
        function setCookie(name, value, days) {
            const expires = new Date();
            expires.setTime(expires.getTime() + (days * 24 * 60 * 60 * 1000));
            document.cookie = `${name}=${value};expires=${expires.toUTCString()};path=/`;
        }
        let subAreas = [];
        let divIdToListen = "dummy";
        const courseSelect = document.getElementById("major");

        const ids = ["dummy", "ti", "design", "marketing", "nutricao", "audiovisuais", "publicidade", "jornalismo"];

        courseSelect.addEventListener("change", function () {
            const selectedOption = courseSelect.options[courseSelect.selectedIndex].text;
            const majorID = majorToID[selectedOption];
            for (var divs of ids) {
                document.getElementById(divs).style.display = "none";

            }
            document.getElementById(ids[majorID]).style.display = "block";
            setCookie("curso", selectedOption, 30);
            let subAreas = [];
            setCookie("area", majorID, 30);


            document.getElementById(`select_${ids[majorID]}`).addEventListener("change", function () {

                var trigged = false;
                for (var div of document.getElementsByClassName('filter-option-inner-inner')) {
                    if (div.innerText == "Selecione um" || div.innerText == selectedOption) continue;
                    subAreas = div.innerText.split(",");
                    trigged = true;
                }
                let subAreasID = [];
                for (var area of subAreas) {
                    let stringTrated = areaSubareaMap[majorID].indexOf(area.replace(/ /g, ""));
                    if (!subAreasID.indexOf(stringTrated)) continue;
                    subAreasID.push(stringTrated);
                }
                if (!trigged) subAreasID = [];
                setCookie("subArea", subAreasID.toString(), 30);

            });
        });


        setCookie("email", new URLSearchParams(window.location.search).get('email'), 30);

