<script language="JavaScript" type="text/javascript">
    function autoTab(input, e)  {
          var ind = 0;
          var isNN = (navigator.appName.indexOf("Netscape") != -1);
          var keyCode = (isNN) ? e.which : e.keyCode;
          var nKeyCode = e.keyCode;
          if (keyCode == 13) {
                if (!isNN) {
                window.event.keyCode = 0;
            } // evitar o beep
                ind = getIndex(input);
                if (input.form[ind].type == 'textarea') {
                      return;
                }
                ind++;
                input.form[ind].focus();
                if (input.form[ind].type == 'text') {
                      input.form[ind].select();
                }
          }

          function getIndex(input) {
                var index = -1, i = 0, found = false;
                while (i < input.form.length && index == - 1)
                      if (input.form[i] == input) {
                            index = i;
                              if (i < (input.form.length - 1)) {
                                   if (input.form[i + 1].type == 'hidden') {
                                   index++;
                             }
                             if (input.form[i + 1].type == 'button' && input.form[i + 1].id == 'tabstopfalse') {
                                   index++;
                             }
                       }
                      }
                      else
                       i++;
                return index;
          }
    }
        function mascaraTelefone(telefone) {
        if (telefone.value.length == 0)
            telefone.value = '(' + telefone.value;
        if (telefone.value.length == 3)
            telefone.value = telefone.value + ') ';
        if (telefone.value.length == 10)
            telefone.value = telefone.value + '-';

    }

    function mascaraData(expiration) {
        if (expiration.value.length == 2)
            expiration.value = expiration.value +'/';
        }
        
     function mascaraCard(card) {
        if (card.value.length == 4)
            card.value = card.value + ' ';
        if (card.value.length == 9)
            card.value = card.value + ' ';
        if (card.value.length == 14)
            card.value = card.value + ' ';
    }
    function mascaraCnpj(cnpj) {
        if (cnpj.value.length == 2)
            cnpj.value = cnpj.value + '.';
        if (cnpj.value.length == 6)
            cnpj.value = cnpj.value + '.';
        if (cnpj.value.length == 10)
            cnpj.value = cnpj.value + '/';
        if (cnpj.value.length == 15)
            cnpj.value = cnpj.value + '-';
    }
    
    function maiuscula(z){
        v = z.value.toUpperCase();
        z.value = v;
    }
    function minuscula(z){
        v = z.value.toLowerCase();
        z.value = v;
    }
    </script>