
/* Este archivo contiene los scripts usados dentro de toda la pagina. */
		
        function datos(cod){

            opener.document.neo.codigo.value = cod;
            window.close();
        }

        function Resaltar_On(GridView){

            if(GridView != null){
                GridView.originalBgColor = GridView.style.backgroundColor;
                GridView.style.backgroundColor='#DBE7F6';
                GridView.style.cursor = 'hand'; 
            }
        }

        function Resaltar_Off(GridView){

            if(GridView != null){
                GridView.style.backgroundColor = GridView.originalBgColor;    
            }
        }

        function Close() {
            window.close();
        }
        
        function NuevaNota(id,ase){

            var idcaso=id;
            var idase=ase;
            window.open("../view/popup_nueva_nota.php?id="+idcaso+"&ase="+idase,"","menubar=no,width=900,height=600");

        }

        function BuscaAsesor(){

            var mipopup=window.open("../view/popup_busca_asesor.php","", "width=700,height=400");
            mipopup.focus();
        }

        function cerrar_this(){

            opener.window.location.href += "?actualizado=exito";
            opener.window.location.reload();
            self.close();
            return false;
        }

        function error_01(){

            window.open("../view/popup_error_01.php","", "width=200,height=100");

        }