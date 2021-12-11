package com.ampersand.llamada.servs;

import java.util.List;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;


import com.ampersand.llamada.utils.GestionRepository;
import com.ampersand.llamada.beans.Gestion;
import com.ampersand.llamada.utils.ContGestion;


@Service 
public class GestionServ implements ContGestion<Gestion>{
	
	@Autowired
	GestionRepository gest;
	
	@Override
	public List<Gestion> gets() {
		
		return gest.findAll();
	}

	@Override
	public Gestion getById(Long id) {
		
		return gest.getById(id);
	}

	@Override
	public Gestion registry(Gestion r) {

		return gest.save(r);
	}

	@Override
	public void clean(Gestion e) {
		
		gest.delete(e);
	}

}
