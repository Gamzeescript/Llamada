package com.ampersand.llamada.servs;

import java.util.List;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

import com.ampersand.llamada.utils.OrigenLlamadaRepository;
import com.ampersand.llamada.beans.OrigenLlamada;
import com.ampersand.llamada.utils.ContOrigenLlamada;

@Service 
public class OrigenLlamadaServ implements ContOrigenLlamada<OrigenLlamada>{
	
	@Autowired
	OrigenLlamadaRepository olla;
	
	@Override
	public List<OrigenLlamada> gets() {
		
		return olla.findAll();
	}

	@Override
	public OrigenLlamada getById(Long id) {
		
		return olla.getById(id);
	}

	@Override
	public OrigenLlamada registry(OrigenLlamada r) {

		return olla.save(r);
	}

	@Override
	public void clean(OrigenLlamada e) {
		
		olla.delete(e);
	}


}
