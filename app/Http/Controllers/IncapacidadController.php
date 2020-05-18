<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IncapacidadController extends Controller
{
    //
    public function inicio(){
        return view('incapacidades.incapacidad');
    }
    public function validacion($tipo,$numero){
        
        $tipoDocumento = $tipo;
        $numeroIdentificacion = $numero;
        //return json_encode($numeroIdentificacion);
        /*return view('incapacidades.validacion',[
            'tipoDocumento' => $tipoDocumento, 
            'numeroIdentificacion' => $numeroIdentificacion
            ]);*/
        return '{"responseMessageOut":{"header":{"invokerDateTime":"2020-03-26 16:49:33","moduleId":"VALIDADORSERVICIOS","systemId":"SALUDENLINEA","messageId":"SALUDENLINEA|94490066|CC","logginData":{"sourceSystemId":"1144151765","destinationSystemId":"Eps Comfenalco Valle"},"destination":{"namespace":"http:\/\/co\/com\/comfenalcovalle\/esb\/ws\/ValidadorServiciosEps","name":"ValidadorServiciosEps","operation":"execute"},"responseStatus":{"statusCode":"SUCCESS"}},"body":{"response":{"validadorResponse":{"xsi":"http:\/\/www.w3.org\/2001\/XMLSchema-instance","Derechos":{"DerechoPrestacion":"SI","Programa":"CE","DescripcionPrograma":"Por plan complementario","MENSAJE":"El usuario con tipo CC y numero 94490066 SI tiene derecho a prestaciÃ³n de servicios, Por plan complementario"},"DsAfiliado":{"Afiliado":[{"EstadoDescripcion":"Afiliado","TipoDocAfiliado":"CC","TipoDocEmpresa":"NI","TipoDocTrabajador":"CC","NombreDepartamento":"VALLE","NombreMunicipio":"CALI","TidTrabajador":"1","IDTrabajador":"94490066","Nombre":"JOAQUIN ","PrimerApellido":"HINCAPIE","SegundoApellido":"HENAO","FechaNacimiento":"1976-08-22T00:00:00","Estrato":"1","Sexo":"M","IDEmpresa":"901160610","TidEmpresa":"2","SedeCapita":"ATENCION PLANES COMPLEMENTARIOS","IdAfiliado":"94490066","TIdAfiliado":"1","FechaAfiliacion":"2018-03-16T00:00:00","Estado":"0","IdEntidad":"12","Direccion":"CRA 85E 43  86 APTO 813","Telefono":"3710537","NombreEmpresa":"CONSORCIO SALUD EPS COMFENALCO VALLE","Telefono2":{},"IdCapita":"900612531","IdMunicipio":"76001","EstadoCivil":"CA","IdUnico":"9999022619226837","email":"JHINCAPIE5@HOTMAIL.COM","FechaAfiliacionSSS":{},"Programa":"EP","IdPrograma":"121201","DescripcionPrograma":"Dependiente","IdRegional":"1","DiasCotizados":"6181","IdArp":{},"IdDiscapacidad":{},"DirEmpresa":"CL 5 6 63","IdHistoria09":{},"IdHistoria12":"63063","FechaDesafiliacion":"0","IdConyuge":"9999022620111983","CabezaFamilia":"S","NombreTrabajador":"JOAQUIN  HINCAPIE HENAO","Principal":"S","IdBarrio":"0","FechaRetiro":"0","PorcentajeDescuento":{},"TipoDescuento":{},"IdIpsCapita":"1026","SemCotSSS":"1186","ClaseAfiliacion":"COT","CodigoRegional":"1"},{"EstadoDescripcion":"Afiliado","TipoDocAfiliado":"CC","TipoDocEmpresa":"NI","TipoDocTrabajador":"CC","NombreDepartamento":"VALLE","NombreMunicipio":"CALI","TidTrabajador":"1","IDTrabajador":"94490066","Nombre":"JOAQUIN ","PrimerApellido":"HINCAPIE","SegundoApellido":"HENAO","FechaNacimiento":"1976-08-22T00:00:00","Estrato":"1","Sexo":"M","IDEmpresa":"901160610","TidEmpresa":"2","SedeCapita":"ATENCION PLANES COMPLEMENTARIOS","IdAfiliado":"94490066","TIdAfiliado":"1","FechaAfiliacion":"2019-07-01T00:00:00","Estado":"0","IdEntidad":"12","Direccion":"CRA 85E 43  86 APTO 813","Telefono":"3710537","NombreEmpresa":"CONSORCIO SALUD EPS COMFENALCO VALLE","Telefono2":{},"IdCapita":"900612531","IdMunicipio":"76001","EstadoCivil":"CA","IdUnico":"9999022619226837","email":"JHINCAPIE5@HOTMAIL.COM","FechaAfiliacionSSS":{},"Programa":"CE","IdPrograma":"22011","DescripcionPrograma":"Trabajadores","IdRegional":"1","DiasCotizados":"6181","IdArp":{},"IdDiscapacidad":{},"DirEmpresa":"CL 5 6 63","IdHistoria09":{},"IdHistoria12":"63063","FechaDesafiliacion":"0","IdConyuge":"9999022620111983","CabezaFamilia":"S","NombreTrabajador":"JOAQUIN  HINCAPIE HENAO","Principal":"S","IdBarrio":"0","FechaRetiro":"0","PorcentajeDescuento":{},"TipoDescuento":{},"CodPlan":"CE","IdIpsCapita":"1026","SemCotSSS":"1186","ClaseAfiliacion":"COT","CodigoRegional":"1"}]},"DsSede":{"Sede":[{"NitEntidad":"800168722","Descripcion":"LA OPTICA PRINCIPAL"},{"NitEntidad":"890307534","Descripcion":"OPTOMETRIA SEDE PRIN"},{"NitEntidad":"900127525","Descripcion":"CIC-VITAL S.PRINCIPAL"},{"NitEntidad":"900612531","Descripcion":"SEDE PRINCIPAL"}],"SedeAtencion":{"IdSedeAtencion":"900612531","SedeAtencion":"ATENCION PLANES COMPLEMENTARIOS","CodSedeAtencion":"1026"}},"DsGrupoFamiliar":{"Beneficiario":[{"TipoDocTrabajador":"CC","TipoDocBeneficiario":"CC","TIdBeneficiario":"1","IDBeneficiario":"29182573","EstadoCaja":"NA","EstadoPOS":"AF","EstadoPCO":"AF","Nombre":"ZULAY MILDREY","PrimerApellido":"BOTERO","SegundoApellido":"MOSQUERA","Sexo":"F","TidTrabajador":"1","IDTrabajador":"94490066"},{"TipoDocTrabajador":"CC","TipoDocBeneficiario":"CC","TIdBeneficiario":"1","IDBeneficiario":"94490066","EstadoCaja":"NA","EstadoPOS":"AF","EstadoPCO":"AF","Nombre":"JOAQUIN ","PrimerApellido":"HINCAPIE","SegundoApellido":"HENAO","Sexo":"M","TidTrabajador":"1","IDTrabajador":"94490066"},{"TipoDocTrabajador":"CC","TipoDocBeneficiario":"TI","TIdBeneficiario":"3","IDBeneficiario":"1105376713","EstadoCaja":"NA","EstadoPOS":"AF","EstadoPCO":"AF","Nombre":"MARIA PAULA","PrimerApellido":"HINCAPIE","SegundoApellido":"BOTERO","Sexo":"F","TidTrabajador":"1","IDTrabajador":"94490066"},{"TipoDocTrabajador":"CC","TipoDocBeneficiario":"CC","TIdBeneficiario":"1","IDBeneficiario":"1143877776","EstadoCaja":"NA","EstadoPOS":"AF","EstadoPCO":"AF","Nombre":"JUAN CAMILO","PrimerApellido":"PENA","SegundoApellido":"BOTERO","Sexo":"M","TidTrabajador":"1","IDTrabajador":"94490066"}]}}}}}}';
        if ($numeroIdentificacion == "" || $tipoDocumento == "") {
            echo json_encode('error');
        }
        else{
                $hoy = date("Y-m-d H:i:s"); 
               
                $host = "https://virtual.comfenalcovalle.com.co/esbtest/V2RESTJSONChannelAdapter";
                $username = "INGENIOSE";
                $password = "1nG3n1o5e";
        
                $headers = array(
                    'Content-type: charset=iso-8859-1; charset=utf-8',
                    'Authorization: Basic '. base64_encode("$username:$password")
                );
                $payload = '{
                    "requestMessageOut": {
                    "header": {
                        "invokerDateTime": "'.$hoy.'",
                        "moduleId": "CHATBOTEPS",
                        "systemId": "CHATBOTEPS",
                        "messageId": "CHATBOTEPS |'.$numeroIdentificacion.'|'.$tipoDocumento.'",
                        "logginData": {
                        "sourceSystemId": "NA",
                        "destinationSystemId": "NA"
                        },
                        "destination": {
                        "namespace": "http://co/com/comfenalcovalle/esb/ws/ValidadorServiciosEps",
                        "name": "ValidadorServiciosEps",
                        "operation": "execute"
                        },
                        "securityCredential": {
                        "userName": "",
                        "userToken": ""
                        },
                        "classification": ""
                    },
                    "body": {
                        "request": {
                        "validadorRequest": {
                            "abreviatura":"'.$tipoDocumento.'",
                            "identificacion": "'.$numeroIdentificacion.'"
                        }
                        }
                    }
                    }
                }';
                //dd($payload);
                header("Content-type: charset=iso-8859-1");
                $process = curl_init($host);
                curl_setopt($process, CURLOPT_HTTPHEADER, $headers);
                curl_setopt($process, CURLOPT_HEADER, 0);
                curl_setopt($process, CURLOPT_USERPWD, $username . ":" . $password);
                curl_setopt($process, CURLOPT_TIMEOUT, 30);
                curl_setopt($process, CURLOPT_POST, 1);
                curl_setopt($process, CURLOPT_POSTFIELDS, $payload);
                curl_setopt($process, CURLOPT_ENCODING, "UTF-8" );
                curl_setopt($process, CURLOPT_RETURNTRANSFER, TRUE);
                $return = curl_exec($process);
                
                curl_close($process);
            
                //finally print your API response
                echo utf8_encode($return);
        }
    }
}