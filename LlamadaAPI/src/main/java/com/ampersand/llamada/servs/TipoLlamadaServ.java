package com.ampersand.llamada.servs;

import java.util.List;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

import com.ampersand.llamada.utils.TipoLlamadaRepository;
import com.ampersand.llamada.beans.TipoLlamada;
import com.ampersand.llamada.utils.ContTipoLlamada;


@Service 
public class TipoLlamadaServ implements ContTipoLlamada<TipoLlamada>{
	
	@Autowired
	TipoLlamadaRepository tlla;
	
	@Override
	public List<TipoLlamada> gets() {
		
		return tlla.findAll();
	}

	@Override
	public TipoLlamada getById(Long id) {
		
		return tlla.getById(id);
	}

	@Override
	public TipoLlamada registry(TipoLlamada r) {

		return tlla.save(r);
	}

	@Override
	public void clean(TipoLlamada e) {
		
		tlla.delete(e);
	}

}
