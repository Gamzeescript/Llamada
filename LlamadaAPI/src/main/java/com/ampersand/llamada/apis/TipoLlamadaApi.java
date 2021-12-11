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


import com.ampersand.llamada.beans.TipoLlamada;
import com.ampersand.llamada.utils.ContTipoLlamada;

@RestController 
@RequestMapping("/api")
public class TipoLlamadaApi {
	
	@Autowired
	ContTipoLlamada tl;
	
	@GetMapping("/tillas")
	public List<TipoLlamada> getAll(){ 

	return tl.gets();

	 }

	 @GetMapping("/tillas/{id}")
	 public ResponseEntity<TipoLlamada> getById(@PathVariable(value = "id")Long id) { 
	 	TipoLlamada fic = (TipoLlamada) tl.getById(id);
	 	return ResponseEntity.ok().body(fic);


	 }

	 @PostMapping("/tillas")
	 public TipoLlamada store(@RequestBody TipoLlamada tilla){ 

	return (TipoLlamada) tl.registry(tilla);

	  }

	  @PutMapping("/tillas/{id}")
	  public ResponseEntity<TipoLlamada> update(@PathVariable(value = "id")Long id, @RequestBody TipoLlamada tilla){

	  TipoLlamada fig = (TipoLlamada) tl.getById(id);
	  fig.setTipo_llamada(tilla.getTipo_llamada());
	  final TipoLlamada actual = (TipoLlamada) tl.registry(fig);
	  return ResponseEntity.ok(actual);


	   }

	   @DeleteMapping("/tillas/{id}")
	   public Map<String, Boolean> delete(@PathVariable(value = "id")Long id){

	   TipoLlamada quitar = (TipoLlamada) tl.getById(id);
	   tl.clean(quitar);
	   Map<String, Boolean> response = new HashMap<String, Boolean>();
	   response.put("borrado exitoso", true);
	   return response;

}




}
