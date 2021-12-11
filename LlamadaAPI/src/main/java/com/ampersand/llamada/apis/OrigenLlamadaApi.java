package com.ampersand.llamada.apis;

import java.util.HashMap;
import java.util.List;
import java.util.Map;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.http.ResponseEntity;
import org.springframework.web.bind.annotation.DeleteMapping;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.PathVariable;
import org.springframework.web.bind.annotation.PostMapping;
import org.springframework.web.bind.annotation.PutMapping;
import org.springframework.web.bind.annotation.RequestBody;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.RestController;

import com.ampersand.llamada.beans.OrigenLlamada;
import com.ampersand.llamada.beans.OrigenLlamada;
import com.ampersand.llamada.utils.ContOrigenLlamada;

@RestController 
@RequestMapping("/api")
public class OrigenLlamadaApi {
	

	@Autowired
	ContOrigenLlamada ol;
	
	@GetMapping("/ollas")
	public List<OrigenLlamada> getAll(){ 

	return ol.gets();

	 }

	 @GetMapping("/ollas/{id}")
	 public ResponseEntity<OrigenLlamada> getById(@PathVariable(value = "id")Long id) { 
	 	OrigenLlamada fic = (OrigenLlamada) ol.getById(id);
	 	return ResponseEntity.ok().body(fic);


	 }

	 @PostMapping("/ollas")
	 public OrigenLlamada store(@RequestBody OrigenLlamada tilla){ 

	return (OrigenLlamada) ol.registry(tilla);

	  }

	  @PutMapping("/ollas/{id}")
	  public ResponseEntity<OrigenLlamada> update(@PathVariable(value = "id")Long id, @RequestBody OrigenLlamada tilla){

	  OrigenLlamada fig = (OrigenLlamada) ol.getById(id);
	  fig.setOrigen_llamada(tilla.getOrigen_llamada());
	  final OrigenLlamada actual = (OrigenLlamada) ol.registry(fig);
	  return ResponseEntity.ok(actual);


	   }

	   @DeleteMapping("/ollas/{id}")
	   public Map<String, Boolean> delete(@PathVariable(value = "id")Long id){

	   OrigenLlamada quitar = (OrigenLlamada) ol.getById(id);
	   ol.clean(quitar);
	   Map<String, Boolean> response = new HashMap<String, Boolean>();
	   response.put("borrado exitoso", true);
	   return response;

}


}
