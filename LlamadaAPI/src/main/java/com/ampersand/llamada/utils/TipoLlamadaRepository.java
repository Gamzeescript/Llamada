package com.ampersand.llamada.utils;

import org.springframework.data.jpa.repository.JpaRepository;
import org.springframework.stereotype.Repository;

import com.ampersand.llamada.beans.TipoLlamada;

@Repository
public interface TipoLlamadaRepository extends JpaRepository<TipoLlamada, Long>{

}
