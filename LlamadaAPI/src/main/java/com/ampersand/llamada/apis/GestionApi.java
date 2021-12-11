package com.ampersand.llamada.apis;

import java.util.HashMap;
import java.util.List;
import java.util.Map;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.http.ResponseEntity;
import org.springframework.beans.factory.annotation.Qualifier;
import org.springframework.web.bind.annotation.DeleteMapping;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.PathVariable;
import org.springframework.web.bind.annotation.PostMapping;
import org.springframework.web.bind.annotation.PutMapping;
import org.springframework.web.bind.annotation.RequestBody;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.RestController;

import com.ampersand.llamada.beans.Gestion;
import com.ampersand.llamada.beans.TipoLlamada;
import com.ampersand.llamada.beans.OrigenLlamada;

import com.ampersand.llamada.utils.ContGestion;
import com.ampersand.llamada.utils.ContTipoLlamada;
import com.ampersand.llamada.utils.ContOrigenLlamada;
@RestController 
@RequestMapping("/api")
public class GestionApi {
	
	@Autowired
	ContGestion gs;
	
	@Autowired
	@Qualifier("ContTipoLlamada")
	ContTipoLlamada tl;
	
	@Autowired
	@Qualifier("ContOrigenLlamada")
	ContOrigenLlamada ol;
	
	@GetMapping("/gest")
	public List<Gestion> getAll(){ 

	return gs.gets();

	 }

	 @GetMapping("/gest/{id}")
	 public ResponseEntity<Gestion> getById(@PathVariable(value = "id")Long id) { 
	 	Gestion fic = (Gestion) gs.getById(id);
	 	return ResponseEntity.ok().body(fic);


	 }

	 @PostMapping("/gest")
	 public Gestion store(@RequestBody Gestion gsic){ 

	return (Gestion) gs.registry(gsic);

	  }

	 

	   @DeleteMapping("/gest/{id}")
	   public Map<String, Boolean> delete(@PathVariable(value = "id")Long id){

	   Gestion quitar = (Gestion) gs.getById(id);
	   gs.clean(quitar);
	   Map<String, Boolean> response = new HashMap<String, Boolean>();
	   response.put("borrado exitoso", true);
	   return response;

}


}
